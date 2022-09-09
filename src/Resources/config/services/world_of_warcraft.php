<?php

declare(strict_types=1);

use Ajardin\BlizzardSdkBundle\HttpClient\BlizzardHttpClient;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $configurator) {
    $services = $configurator->services();

    $endpoints = [
        // TODO ...
    ];

    foreach ($endpoints as $service => $class) {
        $services
            ->set($service, $class)
            ->arg('$blizzardHttpClient', BlizzardHttpClient::class)
        ;

        $services->alias($class, $service);
    }
};
