<?php

<<<<<<<< HEAD:var/cache/dev/ContainerSxCvgj8/getSecurity_Listener_Main_UserProviderService.php
namespace ContainerSxCvgj8;
========
namespace ContainerTx0Fwkx;
>>>>>>>> 5f20a6994f46a2f8003b266fcce776d28f81e020:var/cache/dev/ContainerTx0Fwkx/getSecurity_Listener_Main_UserProviderService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_Main_UserProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.listener.main.user_provider' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\UserProviderListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'UserProviderListener.php';

        return $container->privates['security.listener.main.user_provider'] = new \Symfony\Component\Security\Http\EventListener\UserProviderListener(($container->privates['security.user.provider.concrete.tiendapapel'] ?? $container->load('getSecurity_User_Provider_Concrete_TiendapapelService')));
    }
}
