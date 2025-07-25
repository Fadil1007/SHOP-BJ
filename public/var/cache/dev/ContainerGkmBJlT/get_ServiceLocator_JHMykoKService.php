<?php

namespace ContainerGkmBJlT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JHMykoKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jHMykoK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jHMykoK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'cartItemRepository' => ['privates', 'App\\Repository\\CartItemRepository', 'getCartItemRepositoryService', false],
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', false],
            'emailService' => ['privates', 'App\\Service\\EmailService', 'getEmailServiceService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'cartItemRepository' => 'App\\Repository\\CartItemRepository',
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'emailService' => 'App\\Service\\EmailService',
            'entityManager' => '?',
        ]);
    }
}
