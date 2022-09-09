<?php

declare(strict_types=1);

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\AchievementApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\AuctionHouseApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\AzeriteEssenceApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterAchievementsApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterAppearanceApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterCollectionsApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterEncountersApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterEquipmentApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterHunterPetsApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterMediaApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterMythicKeystoneApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterProfessionsApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterProfileApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterPvpApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterQuestsApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterReputationsApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CovenantApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CreatureApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\GuildApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\GuildCrestApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\ItemApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\JournalApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\MediaSearchApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\ModifiedCraftingApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\MountApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\MythicKeystoneAffixApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\MythicKeystoneDungeonApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\MythicKeystoneLeaderboardApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\MythicRaidLeaderboardApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\PetApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\PlayableClassApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\PlayableRaceApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\PlayableSpecializationApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\PowerTypeApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\ProfessionApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\PvpSeasonApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\PvpTierApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\QuestApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\RealmApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\RegionApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\ReputationApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\SpellApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\TalentApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\TechTalentApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\TitleApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\WowTokenApi;
use Ajardin\BlizzardSdkBundle\HttpClient\BlizzardHttpClient;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $configurator) {
    $services = $configurator->services();

    $endpoints = [
        // Profile API endpoints
        'ajardin.blizzardsdk.world_of_warcraft.character_achievement' => CharacterAchievementsApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.character_appearance' => CharacterAppearanceApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.character_collections' => CharacterCollectionsApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.character_encounters' => CharacterEncountersApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.character_equipment' => CharacterEquipmentApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.character_hunter_pets' => CharacterHunterPetsApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.character_media' => CharacterMediaApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.character_mythic_keystone' => CharacterMythicKeystoneApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.character_professions' => CharacterProfessionsApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.character_pvp' => CharacterPvpApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.character_quests' => CharacterQuestsApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.character_reputations' => CharacterReputationsApi::class,

        // Game Data API endpoints
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
        'ajardin.blizzardsdk.world_of_warcraft.mythic_keystone_affix' => MythicKeystoneAffixApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.mythic_keystone_dungeon' => MythicKeystoneDungeonApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.mythic_keystone_leaderboard' => MythicKeystoneLeaderboardApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.mythic_raid_leaderboard' => MythicRaidLeaderboardApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.pet' => PetApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.playable_class' => PlayableClassApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.playable_race' => PlayableRaceApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.playable_specialization' => PlayableSpecializationApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.power_type' => PowerTypeApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.profession' => ProfessionApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.pvp_season' => PvpSeasonApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.pvp_tier' => PvpTierApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.quest' => QuestApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.realm' => RealmApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.region' => RegionApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.reputation' => ReputationApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.spell' => SpellApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.talent' => TalentApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.tech_talent' => TechTalentApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.title' => TitleApi::class,
        'ajardin.blizzardsdk.world_of_warcraft.wow_token' => WowTokenApi::class,
    ];

    foreach ($endpoints as $service => $class) {
        $services
            ->set($service, $class)
            ->arg('$blizzardHttpClient', BlizzardHttpClient::class)
        ;

        $services->alias($class, $service);
    }
};
