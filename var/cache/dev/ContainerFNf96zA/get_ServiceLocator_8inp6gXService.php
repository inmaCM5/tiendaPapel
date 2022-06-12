<?php

namespace ContainerFNf96zA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8inp6gXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8inp6gX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8inp6gX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cesta' => ['privates', 'App\\Controller\\CestaCompra', 'getCestaCompraService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
        ], [
            'cesta' => 'App\\Controller\\CestaCompra',
            'doctrine' => '?',
            'mailer' => '?',
        ]);
    }
}
