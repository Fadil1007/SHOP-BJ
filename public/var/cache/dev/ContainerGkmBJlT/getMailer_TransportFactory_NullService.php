<?php

namespace ContainerGkmBJlT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_TransportFactory_NullService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'mailer.transport_factory.null' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\NullTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/mailer/Transport/TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/mailer/Transport/AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/mailer/Transport/NullTransportFactory.php';

        $a = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['mailer.transport_factory.null'])) {
            return $container->privates['mailer.transport_factory.null'];
        }

        return $container->privates['mailer.transport_factory.null'] = new \Symfony\Component\Mailer\Transport\NullTransportFactory($a, ($container->privates['http_client.uri_template'] ?? $container->load('getHttpClient_UriTemplateService')), ($container->privates['monolog.logger.mailer'] ?? $container->load('getMonolog_Logger_MailerService')));
    }
}
