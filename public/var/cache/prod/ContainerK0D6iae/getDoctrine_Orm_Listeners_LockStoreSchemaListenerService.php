<?php

namespace ContainerK0D6iae;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Listeners_LockStoreSchemaListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.orm.listeners.lock_store_schema_listener' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\SchemaListener\LockStoreSchemaListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.orm.listeners.lock_store_schema_listener'] = new \Symfony\Bridge\Doctrine\SchemaListener\LockStoreSchemaListener(new RewindableGenerator(fn () => new \EmptyIterator(), 0));
    }
}
