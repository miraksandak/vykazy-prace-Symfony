<?php

namespace ContainerTFyJX2N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWorkRecordTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\WorkRecordType' shared autowired service.
     *
     * @return \App\Form\WorkRecordType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\WorkRecordType'] = new \App\Form\WorkRecordType();
    }
}
