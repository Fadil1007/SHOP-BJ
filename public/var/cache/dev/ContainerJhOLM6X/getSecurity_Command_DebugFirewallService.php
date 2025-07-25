<?php

namespace ContainerJhOLM6X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Command_DebugFirewallService extends App_KernelDevContainer
{
    /*
     * Gets the private 'security.command.debug_firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['security.command.debug_firewall'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand($container->parameters['security.firewalls'], ($container->privates['.service_locator.zJyh7qS'] ?? self::get_ServiceLocator_ZJyh7qSService($container)), ($container->privates['.service_locator._1SGciK'] ?? $container->load('get_ServiceLocator_1SGciKService')), ['main' => [($container->privates['App\\Security\\LoginFormAuthenticator'] ?? $container->load('getLoginFormAuthenticatorService')), ($container->privates['security.authenticator.remember_me.main'] ?? $container->load('getSecurity_Authenticator_RememberMe_MainService'))]], false);

        $instance->setName('debug:firewall');
        $instance->setDescription('Display information about your security firewall(s)');

        return $instance;
    }
}
