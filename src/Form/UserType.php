<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $isEdit = $options['is_edit'];
        
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un email'
                    ]),
                    new Email([
                        'message' => 'Veuillez entrer un email valide'
                    ])
                ]
            ])
            ->add('username', TextType::class, [
                'label' => 'Nom d\'utilisateur',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un nom d\'utilisateur'
                    ]),
                    new Length([
                        'min' => 3,
                        'minMessage' => 'Le nom d\'utilisateur doit comporter au moins {{ limit }} caractères',
                    ])
                ]
            ])
            ->add('firstName', TextType::class, [
                'label' => 'Prénom',
                'required' => false
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Nom',
                'required' => false
            ])
            ->add('phoneNumber', TextType::class, [
                'label' => 'Téléphone',
                'required' => false,
                'help' => 'Format: 10 chiffres, le préfixe +229 sera ajouté automatiquement'
            ])
            ->add('roles', ChoiceType::class, [
                'label' => 'Rôle',
                'choices' => [
                    'Utilisateur' => 'ROLE_USER',
                    'Administrateur' => 'ROLE_ADMIN'
                ],
                'expanded' => true,
                'multiple' => true,
                'data' => $options['data']->getRoles() ?: ['ROLE_USER']
            ]);
            
        if (!$isEdit) {
            $builder->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => [
                    'label' => 'Mot de passe',
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Veuillez entrer un mot de passe',
                        ]),
                        new Length([
                            'min' => 8,
                            'minMessage' => 'Votre mot de passe doit comporter au moins {{ limit }} caractères',
                        ]),
                        new Regex([
                            'pattern' => '/^(?=.*[A-Z])(?=.*[@#$%^&+=!]).*$/',
                            'message' => 'Votre mot de passe doit contenir au moins une lettre majuscule et un caractère spécial'
                        ])
                    ],
                ],
                'second_options' => [
                    'label' => 'Confirmer le mot de passe',
                ],
                'invalid_message' => 'Les mots de passe ne correspondent pas',
                'mapped' => false,
            ]);
        } else {
            $builder->add('newPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => [
                    'label' => 'Nouveau mot de passe (laisser vide pour ne pas modifier)',
                    'constraints' => [
                        new Length([
                            'min' => 8,
                            'minMessage' => 'Votre mot de passe doit comporter au moins {{ limit }} caractères',
                        ]),
                        new Regex([
                            'pattern' => '/^(?=.*[A-Z])(?=.*[@#$%^&+=!]).*$/',
                            'message' => 'Votre mot de passe doit contenir au moins une lettre majuscule et un caractère spécial'
                        ])
                    ],
                ],
                'second_options' => [
                    'label' => 'Confirmer le nouveau mot de passe',
                ],
                'invalid_message' => 'Les mots de passe ne correspondent pas',
                'mapped' => false,
                'required' => false,
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'is_edit' => false,
        ]);
    }
}