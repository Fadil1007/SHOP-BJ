<?php

namespace ContainerK0D6iae;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\UserType' shared autowired service.
     *
     * @return \App\Form\UserType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\UserType'] = new \App\Form\UserType();
    }
}
