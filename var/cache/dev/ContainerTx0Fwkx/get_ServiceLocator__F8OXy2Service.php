<?php

namespace ContainerTx0Fwkx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__F8OXy2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..f8OXy2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..f8OXy2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'event' => ['privates', '.errored..service_locator..f8OXy2.EasyCorp\\Bundle\\EasyAdminBundle\\Event\\BeforeEntityPersistedEvent', NULL, 'Cannot autowire service ".service_locator..f8OXy2": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Event\\BeforeEntityPersistedEvent" but no such service exists.'],
        ], [
            'event' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Event\\BeforeEntityPersistedEvent',
        ]);
    }
}
