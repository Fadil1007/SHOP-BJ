<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Votre nom',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez votre nom complet',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre nom',
                    ]),
                    new Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Votre nom doit comporter au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre nom ne peut pas dépasser {{ limit }} caractères',
                    ]),
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Votre email',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez votre adresse email',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre adresse email',
                    ]),
                    new Email([
                        'message' => 'L\'adresse email "{{ value }}" n\'est pas valide.',
                    ]),
                ],
            ])
            ->add('sujet', ChoiceType::class, [
                'label' => 'Sujet de votre message',
                'choices' => [
                    'Question sur un produit' => 'question_produit',
                    'Commande et livraison' => 'commande_livraison',
                    'Retours et remboursements' => 'retours_remboursements',
                    'Service client' => 'service_client',
                    'Autre' => 'autre',
                ],
                'attr' => [
                    'class' => 'form-select',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez sélectionner un sujet',
                    ]),
                ],
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Votre message',
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 6,
                    'placeholder' => 'Écrivez votre message ici...',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre message',
                    ]),
                    new Length([
                        'min' => 10,
                        'minMessage' => 'Votre message doit comporter au moins {{ limit }} caractères',
                        'max' => 1000,
                        'maxMessage' => 'Votre message ne peut pas dépasser {{ limit }} caractères',
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'attr' => [
                'novalidate' => 'novalidate', // Désactive la validation HTML5 pour utiliser uniquement la validation côté serveur
            ],
        ]);
    }
}