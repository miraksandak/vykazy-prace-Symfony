<?php

namespace ContainerZZpOhhN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_CacheWarmup_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.cache_warmup.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.console.command.cache_warmup.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('cache:warmup', [], 'Warm up an empty cache', false, #[\Closure(name: 'console.command.cache_warmup', class: 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand')] function () use ($container): \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand {
            return ($container->privates['console.command.cache_warmup'] ?? $container->load('getConsole_Command_CacheWarmupService'));
        });
    }
}
