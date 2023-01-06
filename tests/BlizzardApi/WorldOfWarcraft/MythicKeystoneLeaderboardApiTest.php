<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\MythicKeystoneLeaderboardApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\MythicKeystoneLeaderboardApi
 */
final class MythicKeystoneLeaderboardApiTest extends ApiTestCase
{
    private const CONNECTED_REALM_ID = 1315; // Elune x Varimathras
    private const MYTHIC_DUNGEON_ID = 234; // Return to Karazhan: Upper
    private const MYTHIC_PERIOD_ID = 869; // Tuesday 23 August 2022 - Tuesday 30 August 2022

    public function testItRetrievesLeaderboardsIndex(): void
    {
        $client = new MythicKeystoneLeaderboardApi($this->createBlizzardHttpClient());
        $response = $client->leaderboardsIndex(self::DEFAULT_REGION, self::CONNECTED_REALM_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesLeaderboard(): void
    {
        $client = new MythicKeystoneLeaderboardApi($this->createBlizzardHttpClient());
        $response = $client->leaderboard(self::DEFAULT_REGION, self::CONNECTED_REALM_ID, self::MYTHIC_DUNGEON_ID, self::MYTHIC_PERIOD_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
