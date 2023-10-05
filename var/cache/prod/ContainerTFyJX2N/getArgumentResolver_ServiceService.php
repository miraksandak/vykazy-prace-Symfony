<?php

namespace ContainerTFyJX2N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::adminUserView' => ['privates', '.service_locator.JhatSQq', 'get_ServiceLocator_JhatSQqService', true],
            'App\\Controller\\AdminController::adminView' => ['privates', '.service_locator.JhatSQq', 'get_ServiceLocator_JhatSQqService', true],
            'App\\Controller\\AdminController::exportCsv' => ['privates', '.service_locator.WeUTIKe', 'get_ServiceLocator_WeUTIKeService', true],
            'App\\Controller\\DeleteRecordController::delete' => ['privates', '.service_locator.faLKlJn', 'get_ServiceLocator_FaLKlJnService', true],
            'App\\Controller\\EditRecordController::edit' => ['privates', '.service_locator.faLKlJn', 'get_ServiceLocator_FaLKlJnService', true],
            'App\\Controller\\LoginController::index' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\OverviewController::exportCsv' => ['privates', '.service_locator.WeUTIKe', 'get_ServiceLocator_WeUTIKeService', true],
            'App\\Controller\\OverviewController::index' => ['privates', '.service_locator.WeUTIKe', 'get_ServiceLocator_WeUTIKeService', true],
            'App\\Controller\\WorkRecordController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AdminController:adminUserView' => ['privates', '.service_locator.JhatSQq', 'get_ServiceLocator_JhatSQqService', true],
            'App\\Controller\\AdminController:adminView' => ['privates', '.service_locator.JhatSQq', 'get_ServiceLocator_JhatSQqService', true],
            'App\\Controller\\AdminController:exportCsv' => ['privates', '.service_locator.WeUTIKe', 'get_ServiceLocator_WeUTIKeService', true],
            'App\\Controller\\DeleteRecordController:delete' => ['privates', '.service_locator.faLKlJn', 'get_ServiceLocator_FaLKlJnService', true],
            'App\\Controller\\EditRecordController:edit' => ['privates', '.service_locator.faLKlJn', 'get_ServiceLocator_FaLKlJnService', true],
            'App\\Controller\\LoginController:index' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\OverviewController:exportCsv' => ['privates', '.service_locator.WeUTIKe', 'get_ServiceLocator_WeUTIKeService', true],
            'App\\Controller\\OverviewController:index' => ['privates', '.service_locator.WeUTIKe', 'get_ServiceLocator_WeUTIKeService', true],
            'App\\Controller\\WorkRecordController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AdminController::adminUserView' => '?',
            'App\\Controller\\AdminController::adminView' => '?',
            'App\\Controller\\AdminController::exportCsv' => '?',
            'App\\Controller\\DeleteRecordController::delete' => '?',
            'App\\Controller\\EditRecordController::edit' => '?',
            'App\\Controller\\LoginController::index' => '?',
            'App\\Controller\\OverviewController::exportCsv' => '?',
            'App\\Controller\\OverviewController::index' => '?',
            'App\\Controller\\WorkRecordController::new' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AdminController:adminUserView' => '?',
            'App\\Controller\\AdminController:adminView' => '?',
            'App\\Controller\\AdminController:exportCsv' => '?',
            'App\\Controller\\DeleteRecordController:delete' => '?',
            'App\\Controller\\EditRecordController:edit' => '?',
            'App\\Controller\\LoginController:index' => '?',
            'App\\Controller\\OverviewController:exportCsv' => '?',
            'App\\Controller\\OverviewController:index' => '?',
            'App\\Controller\\WorkRecordController:new' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]));
    }
}
