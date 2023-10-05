<?php

namespace ContainerErrQsAY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminerControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AdminerController' shared autowired service.
     *
     * @return \App\Controller\AdminerController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AdminerController'] = $instance = new \App\Controller\AdminerController($container->getEnv('resolve:DATABASE_URL'), $container->getEnv('default:defaultAdminerEnabled:bool:ADMINER_ENABLED'), (\dirname(__DIR__, 4).'/adminer/boot.php'));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\AdminerController', $container));

        return $instance;
    }
}
