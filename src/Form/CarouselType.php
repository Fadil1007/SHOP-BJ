<?php

namespace App\Form;

use App\Entity\Carousel;
use App\Repository\CarouselRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Url;

class CarouselType extends AbstractType
{
    private CarouselRepository $carouselRepository;

    public function __construct(CarouselRepository $carouselRepository)
    {
        $this->carouselRepository = $carouselRepository;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $defaultPosition = $this->getNextPosition();
        
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Titre principal du slide'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un titre'
                    ]),
                ]
            ])
            ->add('subtitle', TextType::class, [
                'label' => 'Sous-titre',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Texte descriptif (optionnel)'
                ],
            ])
            ->add('position', IntegerType::class, [
                'label' => 'Position',
                'required' => true,
                'data' => $options['data']->getPosition() ?? $defaultPosition,
                'attr' => [
                    'min' => 1
                ]
            ])
            ->add('active', CheckboxType::class, [
                'label' => 'Actif',
                'required' => false,
                'label_attr' => [
                    'class' => 'checkbox-switch'
                ]
            ])
            ->add('buttonText', TextType::class, [
                'label' => 'Texte du bouton',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Ex: Acheter maintenant'
                ],
            ])
            ->add('buttonLink', UrlType::class, [
                'label' => 'Lien du bouton',
                'required' => false,
                'attr' => [
                    'placeholder' => 'https://example.com/page'
                ],
                'constraints' => [
                    new Url([
                        'message' => 'Veuillez entrer une URL valide'
                    ]),
                ]
            ])
            ->add('imageFile', FileType::class, [
                'label' => 'Image',
                'required' => $options['data']->getId() === null, // Requis uniquement pour les nouveaux slides
                'mapped' => true,
                'constraints' => [
                    new Image([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp'
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG, WEBP)',
                        'maxSizeMessage' => 'L\'image ne doit pas dépasser 5 Mo'
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Carousel::class,
        ]);
    }
    
    /**
     * Obtient la prochaine position disponible
     */
    private function getNextPosition(): int
    {
        $maxPosition = $this->carouselRepository->findMaxPosition();
        return $maxPosition + 1;
    }
}