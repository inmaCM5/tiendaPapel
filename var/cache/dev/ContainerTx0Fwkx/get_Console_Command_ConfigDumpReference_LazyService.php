<?php

<<<<<<<< HEAD:var/cache/dev/ContainerSxCvgj8/get_Console_Command_ConfigDumpReference_LazyService.php
namespace ContainerSxCvgj8;
========
namespace ContainerTx0Fwkx;
>>>>>>>> 5f20a6994f46a2f8003b266fcce776d28f81e020:var/cache/dev/ContainerTx0Fwkx/get_Console_Command_ConfigDumpReference_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_ConfigDumpReference_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.config_dump_reference.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.console.command.config_dump_reference.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('config:dump-reference', [], 'Dump the default configuration for an extension', false, function () use ($container): \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand {
            return ($container->privates['console.command.config_dump_reference'] ?? $container->load('getConsole_Command_ConfigDumpReferenceService'));
        });
    }
}
