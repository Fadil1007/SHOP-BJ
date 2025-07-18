<?php

namespace ContainerJhOLM6X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_TwigComponent_Command_DebugService extends App_KernelDevContainer
{
    /*
     * Gets the private 'ux.twig_component.command.debug' shared service.
     *
     * @return \Symfony\UX\TwigComponent\Command\TwigComponentDebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['ux.twig_component.command.debug'] = $instance = new \Symfony\UX\TwigComponent\Command\TwigComponentDebugCommand((\dirname(__DIR__, 5).'/templates'), ($container->privates['ux.twig_component.component_factory'] ?? $container->load('getUx_TwigComponent_ComponentFactoryService')), ($container->privates['twig'] ?? self::getTwigService($container)), [], 'components/');

        $instance->setName('debug:twig-component');
        $instance->setDescription('Display components and them usages for an application');

        return $instance;
    }
}
