<?php

namespace ContainerXihxBx8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFedaPayServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\FedaPayService' shared autowired service.
     *
     * @return \App\Service\FedaPayService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/src/Service/FedaPayService.php';

        return $container->privates['App\\Service\\FedaPayService'] = new \App\Service\FedaPayService();
    }
}
