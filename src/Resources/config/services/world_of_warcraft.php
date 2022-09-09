<?php

declare(strict_types=1);

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\AchievementApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\AuctionHouseApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\AzeriteEssenceApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CovenantApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CreatureApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\GuildApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\GuildCrestApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\ItemApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\JournalApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\MediaSearchApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\ModifiedCraftingApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\MountApi;
use Ajardin\BlizzardSdkBundle\HttpClient\BlizzardHttpClient;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $configurator) {
    $services = $configurator->services();

    $endpoints = [
        'ajardin.blizzardsdk.world_of_warcraft.achievement' => AchievementApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.auction_house' => AuctionHouseApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.azerite_essence' => AzeriteEssenceApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.covenant' => CovenantApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.creature' => CreatureApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.guild' => GuildApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.guild_crest' => GuildCrestApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.item' => ItemApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.journal' => JournalApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.media_search' => MediaSearchApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.modified_crafting' => ModifiedCraftingApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.mount' => MountApi::class,
    ];

    foreach ($endpoints as $service => $class) {
        $services
            ->set($service, $class)
            ->arg('$blizzardHttpClient', BlizzardHttpClient::class)
        ;

        $services->alias($class, $service);
    }
};
