<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\DependencyInjection;

use Ajardin\BlizzardSdkBundle\BlizzardApi\Authentication\Credentials;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

final class AjardinBlizzardSdkExtension extends Extension
{
    /**
     * @param array<int, array<string, array<string, string>>> $configs
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new PhpFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.php');
        $loader->load('services/world_of_warcraft.php');

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $definition = $container->getDefinition(Credentials::class);
        $definition->replaceArgument('$clientId', $config['blizzard']['client_id']);
        $definition->replaceArgument('$clientSecret', $config['blizzard']['client_secret']);
    }
}
