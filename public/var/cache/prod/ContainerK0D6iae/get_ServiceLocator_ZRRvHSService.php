<?php

namespace ContainerK0D6iae;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZRRvHSService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.ZRRv_hS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZRRv_hS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', false],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'product' => ['privates', '.errored..service_locator.ZRRv_hS.App\\Entity\\Product', NULL, 'Cannot autowire service ".service_locator.ZRRv_hS": it needs an instance of "App\\Entity\\Product" but this type has been excluded in "config/services.yaml".'],
            'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', false],
            'siteConfigRepository' => ['privates', 'App\\Repository\\SiteConfigRepository', 'getSiteConfigRepositoryService', true],
            'wishlistRepository' => ['privates', 'App\\Repository\\WishlistRepository', 'getWishlistRepositoryService', false],
        ], [
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'entityManager' => '?',
            'product' => 'App\\Entity\\Product',
            'productRepository' => 'App\\Repository\\ProductRepository',
            'siteConfigRepository' => 'App\\Repository\\SiteConfigRepository',
            'wishlistRepository' => 'App\\Repository\\WishlistRepository',
        ]);
    }
}
