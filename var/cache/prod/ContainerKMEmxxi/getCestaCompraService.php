<?php

namespace ContainerKMEmxxi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCestaCompraService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Controller\CestaCompra' shared autowired service.
     *
     * @return \App\Controller\CestaCompra
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Controller\\CestaCompra'] = new \App\Controller\CestaCompra(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
