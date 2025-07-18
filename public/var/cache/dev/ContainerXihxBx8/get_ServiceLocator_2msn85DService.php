<?php

namespace ContainerXihxBx8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2msn85DService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2msn85D' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2msn85D'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'emailService' => ['privates', 'App\\Service\\EmailService', 'getEmailServiceService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'fedaPayService' => ['privates', 'App\\Service\\FedaPayService', 'getFedaPayServiceService', true],
            'orderRepository' => ['privates', 'App\\Repository\\OrderRepository', 'getOrderRepositoryService', true],
        ], [
            'emailService' => 'App\\Service\\EmailService',
            'entityManager' => '?',
            'fedaPayService' => 'App\\Service\\FedaPayService',
            'orderRepository' => 'App\\Repository\\OrderRepository',
        ]);
    }
}
