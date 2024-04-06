<?php

namespace ContainerCs6QaIQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Security_Command_DebugFirewall_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.security.command.debug_firewall.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.security.command.debug_firewall.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('debug:firewall', [], 'Display information about your security firewall(s)', false, #[\Closure(name: 'security.command.debug_firewall', class: 'Symfony\\Bundle\\SecurityBundle\\Command\\DebugFirewallCommand')] fn (): \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand => ($container->privates['security.command.debug_firewall'] ?? $container->load('getSecurity_Command_DebugFirewallService')));
    }
}
