<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Ajardin\BlizzardSdkBundle\BlizzardApi\Authentication\Credentials;
use Ajardin\BlizzardSdkBundle\HttpClient\BlizzardHttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

return static function (ContainerConfigurator $configurator) {
    $services = $configurator->services();

    $services->set(Credentials::class)
        ->arg('$clientId', null)
        ->arg('$clientSecret', null)
        ->private()
    ;

    $services->set(BlizzardHttpClient::class)
        ->arg('$client', HttpClientInterface::class)
        ->arg('$credentials', Credentials::class)
    ;
};
