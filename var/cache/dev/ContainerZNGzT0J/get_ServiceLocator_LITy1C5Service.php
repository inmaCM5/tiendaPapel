<?php

namespace ContainerZNGzT0J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LITy1C5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lITy1C5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lITy1C5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'productosRepository' => ['privates', 'App\\Repository\\ProductosRepository', 'getProductosRepositoryService', true],
        ], [
            'productosRepository' => 'App\\Repository\\ProductosRepository',
        ]);
    }
}
