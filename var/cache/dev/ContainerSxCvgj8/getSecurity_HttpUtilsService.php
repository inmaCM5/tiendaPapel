<?php

<<<<<<<< HEAD:var/cache/dev/ContainerSxCvgj8/getSecurity_HttpUtilsService.php
namespace ContainerSxCvgj8;
========
namespace ContainerTx0Fwkx;
>>>>>>>> 5f20a6994f46a2f8003b266fcce776d28f81e020:var/cache/dev/ContainerTx0Fwkx/getSecurity_HttpUtilsService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_HttpUtilsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.http_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'HttpUtils.php';

        $a = ($container->services['router'] ?? $container->getRouterService());

        return $container->privates['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a, '{^https?://%s$}i', '{^https://%s$}i');
    }
}
