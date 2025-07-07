<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => [
                    'placeholder' => 'Votre adresse email'
                ],
            ])
            ->add('username', TextType::class, [
                'label' => 'Nom d\'utilisateur',
                'attr' => [
                    'placeholder' => 'Votre nom d\'utilisateur'
                ],
            ])
            ->add('firstName', TextType::class, [
                'label' => 'Prénom',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Votre prénom'
                ],
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Nom',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Votre nom'
                ],
            ])
            ->add('phoneNumber', TelType::class, [
                'label' => 'Téléphone',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Votre numéro de téléphone',
                    'pattern' => '\\+229[0-9]*',
                    'inputmode' => 'numeric',
                    'type' => 'tel'
                ],
                'help' => 'Format attendu: +229 suivi de 10 chiffres',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^\+229[0-9]{10}$/',
                        'message' => 'Le numéro de téléphone doit commencer par +229 suivi de 10 chiffres',
                        'match' => true,
                    ]),
                ],
            ])
            ->add('address', TextType::class, [
                'label' => 'Adresse',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Votre adresse'
                ],
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Votre ville'
                ],
            ])
            ->add('postalCode', TextType::class, [
                'label' => 'Code postal',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Votre code postal'
                ],
            ])
            ->add('country', CountryType::class, [
                'label' => 'Pays',
                'required' => false,
                'placeholder' => 'Sélectionnez votre pays',
                'preferred_choices' => ['FR', 'BE', 'CH', 'LU', 'CA'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}