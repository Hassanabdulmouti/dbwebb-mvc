<?php

namespace Container9TytbpO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCardSessionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CardSessionController' shared autowired service.
     *
     * @return \App\Controller\CardSessionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CardSessionController.php';

        $container->services['App\\Controller\\CardSessionController'] = $instance = new \App\Controller\CardSessionController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\CardSessionController', $container));

        return $instance;
    }
}
