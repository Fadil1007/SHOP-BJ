<?php

namespace ContainerGkmBJlT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReviewControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\ReviewController' shared autowired service.
     *
     * @return \App\Controller\Admin\ReviewController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/src/Controller/Admin/ReviewController.php';

        $container->services['App\\Controller\\Admin\\ReviewController'] = $instance = new \App\Controller\Admin\ReviewController(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->privates['App\\Repository\\ReviewRepository'] ?? $container->load('getReviewRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? self::get_ServiceLocator_O2p6Lk7Service($container))->withContext('App\\Controller\\Admin\\ReviewController', $container));

        return $instance;
    }
}
