<?php

namespace ContainerTFyJX2N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMainControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\MainController' shared autowired service.
     *
     * @return \App\Controller\MainController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\MainController'] = $instance = new \App\Controller\MainController($container->getEnv('DATABASE_URL'));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\MainController', $container));

        return $instance;
    }
}
