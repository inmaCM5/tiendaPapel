<?php

<<<<<<<< HEAD:var/cache/dev/ContainerSxCvgj8/getSecurity_Logout_Listener_CsrfTokenClearingService.php
namespace ContainerSxCvgj8;
========
namespace ContainerTx0Fwkx;
>>>>>>>> 5f20a6994f46a2f8003b266fcce776d28f81e020:var/cache/dev/ContainerTx0Fwkx/getSecurity_Logout_Listener_CsrfTokenClearingService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Logout_Listener_CsrfTokenClearingService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.logout.listener.csrf_token_clearing' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'CsrfTokenClearingLogoutListener.php';

        return $container->privates['security.logout.listener.csrf_token_clearing'] = new \Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener(($container->privates['security.csrf.token_storage'] ?? $container->getSecurity_Csrf_TokenStorageService()));
    }
}
