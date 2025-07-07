<?php

namespace App\Controller\Admin;

use App\Entity\Carousel;
use App\Form\CarouselType;
use App\Repository\CarouselRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/admin/carousel')]
class AdminCarouselController extends AbstractController
{
    private $carouselDirectory;
    
    public function __construct(string $carouselDirectory)
    {
        $this->carouselDirectory = $carouselDirectory;
    }
    
    #[Route('/', name: 'admin_carousel_index', methods: ['GET'])]
    public function index(CarouselRepository $carouselRepository): Response
    {
        return $this->render('admin/carousel/index.html.twig', [
            'carousel_slides' => $carouselRepository->findAllSortedByPosition(),
        ]);
    }

    #[Route('/new', name: 'admin_carousel_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $carousel = new Carousel();
        $form = $this->createForm(CarouselType::class, $carousel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageFile')->getData();
            
            if ($imageFile) {
                try {
                    // Génération d'un nom unique pour le fichier (sans chemin)
                    $newFilename = $carousel->generateImageFileName($slugger);
                    
                    // Déplacement du fichier vers le répertoire de stockage
                    $imageFile->move(
                        $this->carouselDirectory,
                        $newFilename
                    );
                    
                    // Mise à jour du nom de fichier dans l'entité (avec chemin pour accès web)
                    $carousel->setImageFilename('uploads/carousel/' . $newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Une erreur s\'est produite lors du téléchargement de l\'image: ' . $e->getMessage());
                    return $this->redirectToRoute('admin_carousel_new');
                }
            }
            
            $entityManager->persist($carousel);
            $entityManager->flush();
            
            $this->addFlash('success', 'Le slide a été créé avec succès.');
            
            return $this->redirectToRoute('admin_carousel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/carousel/new.html.twig', [
            'carousel' => $carousel,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_carousel_show', methods: ['GET'])]
    public function show(Carousel $carousel): Response
    {
        return $this->render('admin/carousel/show.html.twig', [
            'carousel' => $carousel,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_carousel_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Carousel $carousel, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        // Log de débogage dès le début
        $logFile = $this->getParameter('kernel.project_dir') . '/var/log/carousel/error.log';
        file_put_contents(
            $logFile, 
            date('Y-m-d H:i:s') . ' - Début de la méthode edit pour carousel ID: ' . $carousel->getId() . "\n", 
            FILE_APPEND
        );
        
        $oldFilename = $carousel->getImageFilename();
        $form = $this->createForm(CarouselType::class, $carousel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Log de débogage après la soumission du formulaire
            file_put_contents(
                $logFile, 
                date('Y-m-d H:i:s') . ' - Formulaire soumis et valide' . "\n", 
                FILE_APPEND
            );
            
            // Définition explicite de la date de mise à jour
            // Utilisation d'un \DateTime au lieu de \DateTimeInterface pour être plus précis
            $now = new \DateTime('now', new \DateTimeZone('UTC'));
            $carousel->setUpdatedAt($now);
            
            $imageFile = $form->get('imageFile')->getData();
            
            if ($imageFile) {
                try {
                    // Génération d'un nom unique pour le fichier (sans chemin)
                    $newFilename = $carousel->generateImageFileName($slugger);
                    
                    // Déplacement du fichier vers le répertoire de stockage
                    $imageFile->move(
                        $this->carouselDirectory,
                        $newFilename
                    );
                    
                    // Suppression de l'ancien fichier s'il existe
                    if ($oldFilename) {
                        $filesystem = new Filesystem();
                        $oldFilePath = $this->getParameter('kernel.project_dir') . '/public/' . $oldFilename;
                        if ($filesystem->exists($oldFilePath)) {
                            $filesystem->remove($oldFilePath);
                        }
                    }
                    
                    // Mise à jour du nom de fichier dans l'entité (avec chemin pour accès web)
                    $carousel->setImageFilename('uploads/carousel/' . $newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Une erreur s\'est produite lors du téléchargement de l\'image: ' . $e->getMessage());
                    return $this->redirectToRoute('admin_carousel_edit', ['id' => $carousel->getId()]);
                }
            }
            
            try {
                // Log des détails du carousel avant la persistance
                file_put_contents(
                    $logFile, 
                    date('Y-m-d H:i:s') . ' - Avant flush - Statut de updatedAt: ' . 
                    ($carousel->getUpdatedAt() ? 'défini (' . $carousel->getUpdatedAt()->format('Y-m-d H:i:s') . ')' : 'non défini') . "\n", 
                    FILE_APPEND
                );
                
                // Persistance des changements
                $entityManager->flush();
                $this->addFlash('success', 'Le slide a été modifié avec succès.');
                return $this->redirectToRoute('admin_carousel_index', [], Response::HTTP_SEE_OTHER);
            } catch (\Exception $e) {
                // Capture de toutes les exceptions
                $errorMessage = $e->getMessage();
                // Log plus détaillé pour le débogage
                error_log('Erreur carousel update: ' . $errorMessage);
                
                // Écrire dans un fichier de log dédié pour une analyse plus facile
                $logFile = $this->getParameter('kernel.project_dir') . '/var/log/carousel/error.log';
                file_put_contents(
                    $logFile, 
                    date('Y-m-d H:i:s') . ' - ' . $errorMessage . "\n" . 
                    $e->getTraceAsString() . "\n\n", 
                    FILE_APPEND
                );
                
                $this->addFlash('error', 'Erreur lors de la mise à jour: ' . $errorMessage);
                
                // Tentative de récupération en cas d'erreur de DateTime
                if (strpos($errorMessage, 'DateTime') !== false) {
                    // Réessayer avec un format explicite
                    try {
                        $now = new \DateTime('now', new \DateTimeZone('UTC'));
                        // Nettoyer l'entité désynchronisée
                        $entityManager->refresh($carousel);
                        // Réappliquer les modifications
                        $carousel->setUpdatedAt($now);
                        $entityManager->flush();
                        $this->addFlash('success', 'Correction automatique réussie. Le slide a été modifié.');
                        return $this->redirectToRoute('admin_carousel_index', [], Response::HTTP_SEE_OTHER);
                    } catch (\Exception $e2) {
                        $this->addFlash('error', 'La tentative de correction a échoué: ' . $e2->getMessage());
                    }
                }
                
                return $this->redirectToRoute('admin_carousel_edit', ['id' => $carousel->getId()]);
            }
        }

        return $this->renderForm('admin/carousel/edit.html.twig', [
            'carousel' => $carousel,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_carousel_delete', methods: ['POST'])]
    public function delete(Request $request, Carousel $carousel, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$carousel->getId(), $request->request->get('_token'))) {
            // Suppression du fichier image
            if ($carousel->getImageFilename()) {
                $filesystem = new Filesystem();
                $filePath = $this->getParameter('kernel.project_dir') . '/public/' . $carousel->getImageFilename();
                if ($filesystem->exists($filePath)) {
                    $filesystem->remove($filePath);
                }
            }
            
            $entityManager->remove($carousel);
            $entityManager->flush();
            
            $this->addFlash('success', 'Le slide a été supprimé avec succès.');
        }

        return $this->redirectToRoute('admin_carousel_index', [], Response::HTTP_SEE_OTHER);
    }
}