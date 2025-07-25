<?php

namespace ContainerK0D6iae;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0EQ3JQ0Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.0EQ3JQ0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0EQ3JQ0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'carousel' => ['privates', '.errored..service_locator.0EQ3JQ0.App\\Entity\\Carousel', NULL, 'Cannot autowire service ".service_locator.0EQ3JQ0": it needs an instance of "App\\Entity\\Carousel" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'carousel' => 'App\\Entity\\Carousel',
            'entityManager' => '?',
            'slugger' => '?',
        ]);
    }
}
