<?php

namespace App\Entity;

use App\Repository\CarouselRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\String\Slugger\SluggerInterface;
use DateTimeInterface;
use DateTimeImmutable;

#[ORM\Entity(repositoryClass: CarouselRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Carousel implements \Stringable // Implémente l'interface Stringable pour conversion explicite en string
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le titre est obligatoire')]
    #[Assert\Length(
        max: 255,
        maxMessage: 'Le titre ne peut pas dépasser {{ limit }} caractères'
    )]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(
        max: 255,
        maxMessage: 'Le sous-titre ne peut pas dépasser {{ limit }} caractères'
    )]
    private ?string $subtitle = null;

    #[ORM\Column]
    #[Assert\NotNull(message: 'La position est obligatoire')]
    #[Assert\GreaterThan(
        value: 0,
        message: 'La position doit être supérieure à 0'
    )]
    private ?int $position = 1;

    #[ORM\Column]
    private bool $active = true;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(
        max: 50,
        maxMessage: 'Le texte du bouton ne peut pas dépasser {{ limit }} caractères'
    )]
    private ?string $buttonText = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Url(message: 'Le lien doit être une URL valide')]
    private ?string $buttonLink = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageFilename = null;

    #[Assert\Image(
        maxSize: '5M',
        mimeTypes: ['image/jpeg', 'image/png', 'image/webp'],
        mimeTypesMessage: 'Veuillez télécharger une image valide (JPEG, PNG, WEBP)',
        maxSizeMessage: 'L\'image ne doit pas dépasser 5 Mo'
    )]
    private ?File $imageFile = null;

    #[ORM\Column(type: "datetime_immutable")]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: "datetime", nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    public function __construct()
    {
        $this->createdAt = new DateTimeImmutable();
    }

    // Nous désactivons temporairement le hook PreUpdate car il peut causer l'erreur
    // La mise à jour de la date est maintenant gérée directement dans le contrôleur
    // #[ORM\PreUpdate]
    // public function setUpdatedAtValue(): void
    // {
    //     $this->updatedAt = new \DateTime('now', new \DateTimeZone('UTC'));
    // }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(?string $subtitle): static
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): static
    {
        $this->position = $position;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): static
    {
        $this->active = $active;

        return $this;
    }

    public function getButtonText(): ?string
    {
        return $this->buttonText;
    }

    public function setButtonText(?string $buttonText): static
    {
        $this->buttonText = $buttonText;

        return $this;
    }

    public function getButtonLink(): ?string
    {
        return $this->buttonLink;
    }

    public function setButtonLink(?string $buttonLink): static
    {
        $this->buttonLink = $buttonLink;

        return $this;
    }

    public function getImageFilename(): ?string
    {
        return $this->imageFilename;
    }

    public function setImageFilename(?string $imageFilename): static
    {
        $this->imageFilename = $imageFilename;

        return $this;
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    /**
     * Définit le fichier image
     * Cette méthode ne met plus à jour la date updatedAt
     * pour éviter les problèmes de conversion entre DateTime et string
     */
    public function setImageFile(?File $imageFile): self
    {
        $this->imageFile = $imageFile;
        
        // La gestion de la date est maintenant dans le contrôleur
        
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Obtient la date de dernière mise à jour
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * Définit la date de dernière mise à jour
     * Si un objet DateTime est fourni, nous l'utilisons directement
     * Si une chaîne est fournie, nous la convertissons en DateTime
     * Cela protège contre les erreurs de conversion
     */
    public function setUpdatedAt($updatedAt): static
    {
        if ($updatedAt instanceof \DateTimeInterface) {
            $this->updatedAt = $updatedAt;
        } elseif (is_string($updatedAt)) {
            // Convertir la chaîne en DateTime si nécessaire
            $this->updatedAt = new \DateTime($updatedAt);
        } elseif ($updatedAt === null) {
            $this->updatedAt = null;
        } else {
            throw new \InvalidArgumentException("Format de date non pris en charge");
        }

        return $this;
    }
    
    /**
     * Retourne la date de dernière mise à jour au format formaté
     * Cette méthode aide à éviter les erreurs de conversion DateTime vers string
     */
    public function getFormattedUpdatedAt(): ?string
    {
        if ($this->updatedAt) {
            // Solution simple et directe : format() pour convertir DateTime en string
            return $this->updatedAt->format('d/m/Y H:i');
        }
        
        return null;
    }
    
    /**
     * Génère un nom de fichier unique pour l'image
     * 
     * @return string Le nom du fichier uniquement (sans le chemin)
     */
    public function generateImageFileName(SluggerInterface $slugger): string
    {
        // Journal de débogage pour la méthode generateImageFileName
        $logFile = __DIR__ . '/../../var/log/carousel/error.log';
        file_put_contents(
            $logFile, 
            date('Y-m-d H:i:s') . ' - generateImageFileName appelée pour ID:' . $this->getId() . "\n", 
            FILE_APPEND
        );
        
        if (!$this->imageFile instanceof UploadedFile) {
            file_put_contents(
                $logFile, 
                date('Y-m-d H:i:s') . ' - ERREUR: imageFile n\'est pas une instance de UploadedFile' . "\n", 
                FILE_APPEND
            );
            throw new \Exception('Aucun fichier à traiter');
        }
        
        $originalFilename = pathinfo($this->imageFile->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $slugger->slug($originalFilename);
        
        $filename = sprintf(
            '%s-%s.%s',
            $safeFilename,
            uniqid(),
            $this->imageFile->guessExtension()
        );
        
        file_put_contents(
            $logFile, 
            date('Y-m-d H:i:s') . ' - Nom de fichier généré: ' . $filename . "\n", 
            FILE_APPEND
        );
        
        return $filename;
    }
    
    /**
     * Implémentation de l'interface Stringable
     * Cette méthode est appelée quand l'objet est utilisé comme une chaîne
     * 
     * @return string
     */
    public function __toString(): string
    {
        // Vérifier d'abord si un titre existe
        if ($this->title) {
            return (string) $this->title;
        }
        
        // Si on doit afficher des dates, toujours utiliser format() de manière explicite
        // au lieu de laisser PHP tenter une conversion implicite qui échouerait
        if ($this->updatedAt) {
            $formattedDate = $this->updatedAt->format('d/m/Y H:i');
            return 'Carousel (mis à jour le ' . $formattedDate . ')';
        }
        
        if ($this->createdAt) {
            $formattedDate = $this->createdAt->format('d/m/Y H:i');
            return 'Carousel (créé le ' . $formattedDate . ')';
        }
        
        // Fallback avec l'ID ou 'new'
        return 'Carousel #' . ($this->id ? (string) $this->id : 'new');
    }
}