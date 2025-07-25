<?php

namespace ContainerK0D6iae;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PWnkDHIService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.pWnkDHI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pWnkDHI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'category' => ['privates', '.errored..service_locator.pWnkDHI.App\\Entity\\Category', NULL, 'Cannot autowire service ".service_locator.pWnkDHI": it needs an instance of "App\\Entity\\Category" but this type has been excluded in "config/services.yaml".'],
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', false],
            'siteConfigRepository' => ['privates', 'App\\Repository\\SiteConfigRepository', 'getSiteConfigRepositoryService', true],
        ], [
            'category' => 'App\\Entity\\Category',
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'siteConfigRepository' => 'App\\Repository\\SiteConfigRepository',
        ]);
    }
}
