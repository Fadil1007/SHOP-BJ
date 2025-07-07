<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom de la catégorie',
                'attr' => [
                    'placeholder' => 'Entrez le nom de la catégorie',
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un nom de catégorie',
                    ]),
                ],
            ])
            ->add('slug', TextType::class, [
                'label' => 'Slug (URL)',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Laissez vide pour générer automatiquement',
                    'class' => 'form-control',
                ],
                'help' => 'Le slug sera utilisé dans l\'URL de la catégorie. Il est généré automatiquement si laissé vide.',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Entrez une description pour la catégorie',
                    'class' => 'form-control',
                    'rows' => 5,
                ],
            ])
            ->add('parent', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name',
                'label' => 'Catégorie parente',
                'required' => false,
                'placeholder' => 'Aucune (catégorie principale)',
                'attr' => [
                    'class' => 'form-select',
                ],
            ])
            ->add('imageFile', FileType::class, [
                'label' => 'Image de la catégorie',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG ou WEBP)',
                    ])
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
                'help' => 'Cette image sera utilisée comme miniature dans les listings et comme bannière en haut de la page de la catégorie.'
            ])
            ->add('featured', CheckboxType::class, [
                'label' => 'Catégorie mise en avant (affiche la catégorie dans la barre de navigation)',
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input',
                ],
                'data' => false,
                'help' => 'Cochez cette case uniquement pour les catégories principales qui doivent apparaître dans la barre de navigation. Par défaut, la catégorie apparaît uniquement dans la page "Toutes les catégories".',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Category::class,
        ]);
    }
}