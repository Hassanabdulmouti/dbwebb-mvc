<?php

namespace ContainerKPU6axT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Report' shared autowired service.
     *
     * @return \App\Controller\Report
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Report.php';

        $container->services['App\\Controller\\Report'] = $instance = new \App\Controller\Report();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\Report', $container));

        return $instance;
    }
}