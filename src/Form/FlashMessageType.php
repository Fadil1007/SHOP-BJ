<?php

namespace App\Form;

use App\Entity\FlashMessage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FlashMessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Titre du message flash'
                ]
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 4,
                    'placeholder' => 'Contenu du message flash'
                ]
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type',
                'choices' => [
                    'Information' => 'info',
                    'Succès' => 'success',
                    'Attention' => 'warning',
                    'Erreur' => 'danger'
                ],
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('targetPages', ChoiceType::class, [
                'label' => 'Pages cibles',
                'choices' => [
                    'Toutes les pages' => 'all',
                    'Page d\'accueil' => 'home',
                    'Produits' => 'products',
                    'Catégories' => 'categories',
                    'Panier' => 'cart',
                    'Commande' => 'checkout'
                ],
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('isActive', CheckboxType::class, [
                'label' => 'Actif',
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input'
                ]
            ])
            ->add('startDate', DateTimeType::class, [
                'label' => 'Date de début (optionnel)',
                'required' => false,
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('endDate', DateTimeType::class, [
                'label' => 'Date de fin (optionnel)',
                'required' => false,
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FlashMessage::class,
        ]);
    }
}
