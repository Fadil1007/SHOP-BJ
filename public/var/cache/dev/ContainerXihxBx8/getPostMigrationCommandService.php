<?php

namespace ContainerXihxBx8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostMigrationCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\PostMigrationCommand' shared autowired service.
     *
     * @return \App\Command\PostMigrationCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/src/Command/PostMigrationCommand.php';

        $container->privates['App\\Command\\PostMigrationCommand'] = $instance = new \App\Command\PostMigrationCommand(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')));

        $instance->setName('app:post-migration');
        $instance->setDescription('Executes tasks after database migration');

        return $instance;
    }
}
