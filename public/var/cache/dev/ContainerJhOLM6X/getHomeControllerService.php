<?php

namespace ContainerJhOLM6X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHomeControllerService extends App_KernelDevContainer
{
    /*
     * Gets the public 'App\Controller\HomeController' shared autowired service.
     *
     * @return \App\Controller\HomeController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\HomeController'] = $instance = new \App\Controller\HomeController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? self::get_ServiceLocator_O2p6Lk7Service($container))->withContext('App\\Controller\\HomeController', $container));

        return $instance;
    }
}
