<?php

namespace ContainerK0D6iae;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RvMNZGhService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.rvMNZGh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rvMNZGh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'user' => ['privates', '.errored..service_locator.rvMNZGh.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.rvMNZGh": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
