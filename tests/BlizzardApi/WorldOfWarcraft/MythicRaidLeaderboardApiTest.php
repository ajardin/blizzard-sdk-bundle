<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\MythicRaidLeaderboardApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 * @group functional
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\MythicRaidLeaderboardApi
 */
final class MythicRaidLeaderboardApiTest extends ApiTestCase
{
    private const RAID_NAME = 'castle-nathria';
    private const FACTION_NAME = 'alliance';
    
    public function testItRetrievesTheLeaderboard(): void
    {
        $client = new MythicRaidLeaderboardApi($this->createBlizzardHttpClient());
        $response = $client->leaderboard(self::DEFAULT_REGION, self::RAID_NAME, self::FACTION_NAME);

        $this->assertRequestIsSuccessful($response);
    }
}
