<?php

<<<<<<<< HEAD:var/cache/dev/ContainerSxCvgj8/getConsole_Command_TranslationPullService.php
namespace ContainerSxCvgj8;
========
namespace ContainerTx0Fwkx;
>>>>>>>> 5f20a6994f46a2f8003b266fcce776d28f81e020:var/cache/dev/ContainerTx0Fwkx/getConsole_Command_TranslationPullService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationPullService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.translation_pull' shared service.
     *
     * @return \Symfony\Component\Translation\Command\TranslationPullCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'TranslationTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'TranslationPullCommand.php';

        $container->privates['console.command.translation_pull'] = $instance = new \Symfony\Component\Translation\Command\TranslationPullCommand(($container->privates['translation.provider_collection'] ?? $container->load('getTranslation_ProviderCollectionService')), ($container->privates['translation.writer'] ?? $container->load('getTranslation_WriterService')), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), 'en', [], []);

        $instance->setName('translation:pull');
        $instance->setDescription('Pull translations from a given provider.');

        return $instance;
    }
}
