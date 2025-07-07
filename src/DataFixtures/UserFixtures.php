<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // Créer un utilisateur admin
        $admin = new User();
        $admin->setEmail('admin@example.com');
        $admin->setUsername('admin');
        $admin->setFirstName('Admin');
        $admin->setLastName('User');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword($this->passwordHasher->hashPassword(
            $admin,
            'password'
        ));
        $admin->setIsVerified(true);
        $admin->setCreatedAt(new \DateTimeImmutable());
        
        $manager->persist($admin);

        // Créer un utilisateur standard
        $user = new User();
        $user->setEmail('user@example.com');
        $user->setUsername('user');
        $user->setFirstName('Regular');
        $user->setLastName('User');
        $user->setRoles(['ROLE_USER']);
        $user->setPassword($this->passwordHasher->hashPassword(
            $user,
            'password'
        ));
        $user->setIsVerified(true);
        $user->setCreatedAt(new \DateTimeImmutable());
        
        $manager->persist($user);

        $manager->flush();
    }
}