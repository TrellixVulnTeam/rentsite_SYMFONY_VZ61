<?php

namespace ContainerWwyOiOI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2RmIwlSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2RmIwlS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2RmIwlS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'crepos' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'repos' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
            'srepos' => ['privates', 'App\\Repository\\StockRepository', 'getStockRepositoryService', true],
        ], [
            'crepos' => 'App\\Repository\\CategoryRepository',
            'repos' => 'App\\Repository\\ProductRepository',
            'srepos' => 'App\\Repository\\StockRepository',
        ]);
    }
}
