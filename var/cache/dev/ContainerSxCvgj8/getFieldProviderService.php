<?php

<<<<<<<< HEAD:var/cache/dev/ContainerSxCvgj8/getFieldProviderService.php
namespace ContainerSxCvgj8;
========
namespace ContainerTx0Fwkx;
>>>>>>>> 5f20a6994f46a2f8003b266fcce776d28f81e020:var/cache/dev/ContainerTx0Fwkx/getFieldProviderService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFieldProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Provider\FieldProvider' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Provider\FieldProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'FieldProvider.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\FieldProvider'] = new \EasyCorp\Bundle\EasyAdminBundle\Provider\FieldProvider(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $container->getAdminContextProviderService()));
    }
}
