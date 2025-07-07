<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class CheckoutFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lastName', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre nom',
                    ]),
                ],
                'attr' => [
                    'placeholder' => 'Nom',
                    'class' => 'form-control'
                ],
                'label' => 'Nom'
            ])
            ->add('firstName', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre prénom',
                    ]),
                ],
                'attr' => [
                    'placeholder' => 'Prénom',
                    'class' => 'form-control'
                ],
                'label' => 'Prénom'
            ])
            ->add('city', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre ville',
                    ]),
                ],
                'attr' => [
                    'placeholder' => 'Ville',
                    'class' => 'form-control'
                ],
                'label' => 'Ville'
            ])
            ->add('phone', TelType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre numéro de téléphone',
                    ]),
                    new Regex([
                        'pattern' => '/^[0-9]{10}$/',
                        'message' => 'Le numéro de téléphone doit contenir exactement 10 chiffres'
                    ])
                ],
                'attr' => [
                    'placeholder' => 'Numéro à 10 chiffres',
                    'class' => 'form-control phone-input',
                    'pattern' => '[0-9]*',
                    'inputmode' => 'numeric',
                    'maxlength' => '10',
                    'type' => 'tel'
                ],
                'label' => 'Numéro de téléphone',
                'help' => 'Entrez uniquement les 10 chiffres (sans +229)'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'csrf_protection' => true,
            'data_class' => null,
        ]);
    }
}
