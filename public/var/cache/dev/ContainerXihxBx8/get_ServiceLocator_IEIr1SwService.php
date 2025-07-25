<?php

namespace ContainerXihxBx8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IEIr1SwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IEIr1Sw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IEIr1Sw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'passwordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'resetPasswordRepository' => ['privates', 'App\\Repository\\ResetPasswordRepository', 'getResetPasswordRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'entityManager' => '?',
            'passwordHasher' => '?',
            'resetPasswordRepository' => 'App\\Repository\\ResetPasswordRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
