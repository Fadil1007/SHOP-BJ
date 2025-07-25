<?php

namespace ContainerGkmBJlT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestaSitemap_GeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'presta_sitemap.generator' shared service.
     *
     * @return \Presta\SitemapBundle\Service\Generator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/presta/sitemap-bundle/src/Service/UrlContainerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/presta/sitemap-bundle/src/Service/AbstractGenerator.php';
        include_once \dirname(__DIR__, 5).'/vendor/presta/sitemap-bundle/src/Service/GeneratorInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/presta/sitemap-bundle/src/Service/Generator.php';

        $container->services['presta_sitemap.generator'] = $instance = new \Presta\SitemapBundle\Service\Generator(($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)), ($container->services['router'] ?? self::getRouterService($container)), 50000);

        $instance->setDefaults($container->parameters['presta_sitemap.defaults']);

        return $instance;
    }
}
