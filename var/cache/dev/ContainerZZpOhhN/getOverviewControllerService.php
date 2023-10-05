<?php

namespace ContainerZZpOhhN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOverviewControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\OverviewController' shared autowired service.
     *
     * @return \App\Controller\OverviewController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/OverviewController.php';

        $container->services['App\\Controller\\OverviewController'] = $instance = new \App\Controller\OverviewController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\OverviewController', $container));

        return $instance;
    }
}
