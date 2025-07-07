<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Product;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom du produit',
                'attr' => [
                    'placeholder' => 'Entrez le nom du produit',
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un nom de produit',
                    ]),
                ],
            ])
            ->add('sku', TextType::class, [
                'label' => 'Référence (SKU)',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Entrez une référence unique (optionnel)',
                    'class' => 'form-control',
                ],
            ])
            ->add('shortDescription', TextareaType::class, [
                'label' => 'Description courte',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Entrez une description courte',
                    'class' => 'form-control',
                    'rows' => 3,
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description complète',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Entrez une description détaillée du produit',
                    'class' => 'form-control',
                    'rows' => 6,
                ],
            ])
            ->add('price', MoneyType::class, [
                'label' => 'Prix (en FCFA)',
                'currency' => 'XOF',
                'divisor' => 1,
                'attr' => [
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un prix',
                    ]),
                    new Positive([
                        'message' => 'Le prix doit être positif',
                    ]),
                ],
            ])
            ->add('oldPrice', MoneyType::class, [
                'label' => 'Ancien prix en FCFA (pour les promotions)',
                'required' => false,
                'currency' => 'XOF',
                'divisor' => 1,
                'attr' => [
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new Positive([
                        'message' => 'L\'ancien prix doit être positif',
                    ]),
                ],
            ])
            ->add('stock', NumberType::class, [
                'label' => 'Stock disponible',
                'attr' => [
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer une quantité en stock',
                    ]),
                ],
            ])
            ->add('imageFile', FileType::class, [
                'label' => 'Image principale du produit (obligatoire)',
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
            ])
            ->add('imageFile2', FileType::class, [
                'label' => 'Image secondaire (optionnelle)',
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
            ])
            ->add('imageFile3', FileType::class, [
                'label' => 'Image tertiaire (optionnelle)',
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
            ])
            ->add('imageFile4', FileType::class, [
                'label' => 'Image quaternaire (optionnelle)',
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
            ])
            ->add('sizes', ChoiceType::class, [
                'label' => 'Tailles disponibles',
                'choices' => [
                    'XS' => 'XS',
                    'S' => 'S',
                    'M' => 'M',
                    'L' => 'L',
                    'XL' => 'XL',
                    'XXL' => 'XXL',
                    '36' => '36',
                    '38' => '38',
                    '40' => '40',
                    '42' => '42',
                    '44' => '44',
                    '46' => '46',
                ],
                'expanded' => true,
                'multiple' => true,
                'attr' => [
                    'class' => 'sizes-checkboxes',
                ],
            ])
            ->add('colors', ChoiceType::class, [
                'label' => 'Couleurs disponibles',
                'choices' => [
                    'Noir' => 'noir',
                    'Blanc' => 'blanc',
                    'Rouge' => 'rouge',
                    'Bleu' => 'bleu',
                    'Vert' => 'vert',
                    'Jaune' => 'jaune',
                    'Orange' => 'orange',
                    'Violet' => 'violet',
                    'Rose' => 'rose',
                    'Marron' => 'marron',
                    'Chocolat' => 'chocolat',
                    'Or' => 'or',
                    'Argent' => 'argent',
                    'Bronze' => 'bronze',
                    'Doré' => 'doré',
                    'Gris' => 'gris',
                    'Beige' => 'beige',
                    'Ivoire' => 'ivoire',
                    'Turquoise' => 'turquoise',
                    'Bordeaux' => 'bordeaux',
                ],
                'expanded' => true,
                'multiple' => true,
                'attr' => [
                    'class' => 'colors-checkboxes',
                ],
                'choice_attr' => function($choice, $key, $value) {
                    // Pour pouvoir identifier visuellement les couleurs
                    return ['class' => 'form-check-input color-checkbox'];
                },
            ])
            ->add('featured', CheckboxType::class, [
                'label' => 'Produit mis en avant',
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input',
                ],
            ])
            ->add('isActive', CheckboxType::class, [
                'label' => 'Produit actif (visible sur le site)',
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input',
                ],
            ])
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name',
                'label' => 'Catégorie',
                'placeholder' => 'Sélectionnez une catégorie',
                'attr' => [
                    'class' => 'form-select',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez sélectionner une catégorie',
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}