<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use App\Service\EmailService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    private ContactRepository $contactRepository;
    private EmailService $emailService;
    
    public function __construct(ContactRepository $contactRepository, EmailService $emailService)
    {
        $this->contactRepository = $contactRepository;
        $this->emailService = $emailService;
    }

    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        
        $messageSent = false;
        
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            
            // Créer et enregistrer le message de contact dans la base de données
            $contact = new Contact();
            $contact->setName($data['nom']);
            $contact->setEmail($data['email']);
            $contact->setSubject($this->getSujetLibelle($data['sujet']));
            $contact->setMessage($data['message']);
            
            // Enregistrer en base de données
            $this->contactRepository->save($contact, true);
            
            // Loguer avant de tenter l'envoi
            error_log('Traitement du formulaire de contact pour: ' . $data['email']);
            
            // Envoyer une notification par email à l'administrateur
            $this->emailService->sendNewContactNotification(
                $data['nom'],
                $data['email'],
                $this->getSujetLibelle($data['sujet']),
                $data['message']
            );
            
            // Utiliser le service EmailService pour envoyer le message
            try {
                $emailSent = $this->emailService->sendContactMessage(
                    $data['nom'],
                    $data['email'],
                    $this->getSujetLibelle($data['sujet']),
                    $data['message']
                );
                
                // Notification de succès
                if ($emailSent) {
                    error_log('Email de contact envoyé avec succès à shopbj04@gmail.com');
                    $this->addFlash('success', 'Votre message a été envoyé avec succès. Nous vous répondrons dans les plus brefs délais.');
                    $messageSent = true;
                    
                    // Redirection vers la même page pour éviter la soumission multiple
                    return $this->redirectToRoute('app_contact', ['success' => 1]);
                } else {
                    error_log('Échec de l\'envoi de l\'email de contact, voir les logs ci-dessus');
                    $this->addFlash('warning', 'Votre message a bien été enregistré mais l\'email n\'a pas pu être envoyé. Nous vous contacterons dès que possible.');
                }
            } catch (\Exception $e) {
                error_log('Exception lors de l\'envoi du message de contact: ' . $e->getMessage());
                $this->addFlash('error', 'Une erreur est survenue lors de l\'envoi de votre message. Veuillez réessayer plus tard.');
            }
        }
        
        return $this->render('contact/index.html.twig', [
            'contactForm' => $form->createView(),
            'messageSent' => $messageSent || $request->query->get('success'),
            'site_name' => 'SHOP BJ'
        ]);
    }
    
    private function getSujetLibelle(string $sujetCode): string
    {
        $sujets = [
            'question_produit' => 'Question sur un produit',
            'commande_livraison' => 'Commande et livraison',
            'retours_remboursements' => 'Retours et remboursements',
            'service_client' => 'Service client',
            'autre' => 'Autre',
        ];
        
        return $sujets[$sujetCode] ?? 'Formulaire de contact';
    }
}