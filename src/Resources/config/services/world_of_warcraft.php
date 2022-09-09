<?php

declare(strict_types=1);

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\AchievementApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\AuctionHouseApi;
use Ajardin\BlizzardSdkBundle\HttpClient\BlizzardHttpClient;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $configurator) {
    $services = $configurator->services();

    $endpoints = [
        'ajardin.blizzardsdk.world_of_warcraft.achievement' => AchievementApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.auction_house' => AuctionHouseApi::class,
    ];

    foreach ($endpoints as $service => $class) {
        $services
            ->set($service, $class)
            ->arg('$blizzardHttpClient', BlizzardHttpClient::class)
        ;

        $services->alias($class, $service);
    }
};
