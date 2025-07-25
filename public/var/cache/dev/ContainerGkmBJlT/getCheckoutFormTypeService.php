<?php

namespace ContainerGkmBJlT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCheckoutFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\CheckoutFormType' shared autowired service.
     *
     * @return \App\Form\CheckoutFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 5).'/src/Form/CheckoutFormType.php';

        return $container->privates['App\\Form\\CheckoutFormType'] = new \App\Form\CheckoutFormType();
    }
}
