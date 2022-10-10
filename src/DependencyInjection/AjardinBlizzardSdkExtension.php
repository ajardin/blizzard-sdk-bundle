<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\DependencyInjection;

use Ajardin\BlizzardSdkBundle\BlizzardApi\Authentication\Credentials;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

final class AjardinBlizzardSdkExtension extends Extension
{
    /**
     * @param array<int, array<string, array<string, string>>> $configs
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
        $loader->load('services/world_of_warcraft.xml');

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $definition = $container->getDefinition('ajardin_blizzard_sdk.credentials');
        $definition->replaceArgument('$clientId', $config['blizzard']['client_id']);
        $definition->replaceArgument('$clientSecret', $config['blizzard']['client_secret']);
    }
}
