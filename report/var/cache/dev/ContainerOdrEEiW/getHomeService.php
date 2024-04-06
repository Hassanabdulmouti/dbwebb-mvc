<?php

namespace ContainerOdrEEiW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHomeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Home' shared autowired service.
     *
     * @return \App\Controller\Home
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Home.php';

        $container->services['App\\Controller\\Home'] = $instance = new \App\Controller\Home();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\Home', $container));

        return $instance;
    }
}
