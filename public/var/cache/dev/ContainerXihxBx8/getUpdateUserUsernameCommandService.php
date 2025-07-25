<?php

namespace ContainerXihxBx8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateUserUsernameCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\UpdateUserUsernameCommand' shared autowired service.
     *
     * @return \App\Command\UpdateUserUsernameCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/src/Command/UpdateUserUsernameCommand.php';

        $container->privates['App\\Command\\UpdateUserUsernameCommand'] = $instance = new \App\Command\UpdateUserUsernameCommand(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setName('app:update-user-username');
        $instance->setDescription('Met à jour le nom d\'utilisateur d\'un utilisateur');

        return $instance;
    }
}
