<?php

namespace ContainerK0D6iae;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_AxmPPI9Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.axmPPI9' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['presta_sitemap.dumper'] ?? $container->load('getPrestaSitemap_DumperService'));

        if (isset($container->privates['.messenger.handler_descriptor.axmPPI9'])) {
            return $container->privates['.messenger.handler_descriptor.axmPPI9'];
        }

        return $container->privates['.messenger.handler_descriptor.axmPPI9'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Presta\SitemapBundle\Messenger\DumpSitemapMessageHandler(($container->services['router'] ?? self::getRouterService($container)), $a, \dirname(__DIR__, 4)), []);
    }
}
