<?php

namespace ContainerTFyJX2N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWorkRecordControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\WorkRecordController' shared autowired service.
     *
     * @return \App\Controller\WorkRecordController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\WorkRecordController'] = $instance = new \App\Controller\WorkRecordController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\WorkRecordController', $container));

        return $instance;
    }
}
