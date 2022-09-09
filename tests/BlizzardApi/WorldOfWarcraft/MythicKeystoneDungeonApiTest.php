<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\MythicKeystoneDungeonApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 * @group functional
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\MythicKeystoneDungeonApi
 */
final class MythicKeystoneDungeonApiTest extends ApiTestCase
{
    private const MYTHIC_KEYSTONE_SEASON_ID = 5; // Shadowlands season 1
    private const MYTHIC_DUNGEON_ID = 234; // Return to Karazhan: Upper
    private const MYTHIC_PERIOD_ID = 869; // Tuesday 23 August 2022 - Tuesday 30 August 2022

    public function testItRetrievesDungeonsIndex(): void
    {
        $client = new MythicKeystoneDungeonApi($this->createBlizzardHttpClient());
        $response = $client->dungeonsIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesDungeon(): void
    {
        $client = new MythicKeystoneDungeonApi($this->createBlizzardHttpClient());
        $response = $client->dungeon(self::DEFAULT_REGION, self::MYTHIC_DUNGEON_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPeriodsIndex(): void
    {
        $client = new MythicKeystoneDungeonApi($this->createBlizzardHttpClient());
        $response = $client->periodsIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPeriod(): void
    {
        $client = new MythicKeystoneDungeonApi($this->createBlizzardHttpClient());
        $response = $client->period(self::DEFAULT_REGION, self::MYTHIC_PERIOD_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesSeasonsIndex(): void
    {
        $client = new MythicKeystoneDungeonApi($this->createBlizzardHttpClient());
        $response = $client->seasonsIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesSeason(): void
    {
        $client = new MythicKeystoneDungeonApi($this->createBlizzardHttpClient());
        $response = $client->season(self::DEFAULT_REGION, self::MYTHIC_KEYSTONE_SEASON_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
