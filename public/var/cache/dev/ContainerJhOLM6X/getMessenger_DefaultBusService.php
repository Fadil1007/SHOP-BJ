<?php

namespace ContainerJhOLM6X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_DefaultBusService extends App_KernelDevContainer
{
    /*
     * Gets the public 'messenger.default_bus' shared service.
     *
     * @return \Symfony\Component\Messenger\MessageBus
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['messenger.default_bus'] = new \Symfony\Component\Messenger\MessageBus(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['messenger.bus.default.middleware.add_bus_name_stamp_middleware'] ??= new \Symfony\Component\Messenger\Middleware\AddBusNameStampMiddleware('messenger.bus.default'));
            yield 1 => ($container->privates['messenger.middleware.reject_redelivered_message_middleware'] ??= new \Symfony\Component\Messenger\Middleware\RejectRedeliveredMessageMiddleware());
            yield 2 => ($container->privates['messenger.middleware.dispatch_after_current_bus'] ??= new \Symfony\Component\Messenger\Middleware\DispatchAfterCurrentBusMiddleware());
            yield 3 => ($container->privates['messenger.middleware.failed_message_processing_middleware'] ??= new \Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware());
            yield 4 => ($container->privates['messenger.bus.default.middleware.send_message'] ?? $container->load('getMessenger_Bus_Default_Middleware_SendMessageService'));
            yield 5 => ($container->privates['messenger.bus.default.middleware.handle_message'] ?? $container->load('getMessenger_Bus_Default_Middleware_HandleMessageService'));
        }, 6));
    }
}
