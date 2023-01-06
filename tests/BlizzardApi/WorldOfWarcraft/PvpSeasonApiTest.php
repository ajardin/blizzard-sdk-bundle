<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\PvpSeasonApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\PvpSeasonApi
 */
final class PvpSeasonApiTest extends ApiTestCase
{
    private const PVP_SEASON_ID = 30; // Shadowlands season 1
    private const PVP_BRACKET = '3v3';

    public function testItRetrievesPvpSeasonIndex(): void
    {
        $client = new PvpSeasonApi($this->createBlizzardHttpClient());
        $response = $client->pvpSeasonIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPvpSeason(): void
    {
        $client = new PvpSeasonApi($this->createBlizzardHttpClient());
        $response = $client->pvpSeason(self::DEFAULT_REGION, self::PVP_SEASON_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPvpLeaderboardIndex(): void
    {
        $client = new PvpSeasonApi($this->createBlizzardHttpClient());
        $response = $client->pvpLeaderboardIndex(self::DEFAULT_REGION, self::PVP_SEASON_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPvpLeaderboard(): void
    {
        $client = new PvpSeasonApi($this->createBlizzardHttpClient());
        $response = $client->pvpLeaderboard(self::DEFAULT_REGION, self::PVP_SEASON_ID, self::PVP_BRACKET);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPvpRewardIndex(): void
    {
        $client = new PvpSeasonApi($this->createBlizzardHttpClient());
        $response = $client->pvpRewardIndex(self::DEFAULT_REGION, self::PVP_SEASON_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
