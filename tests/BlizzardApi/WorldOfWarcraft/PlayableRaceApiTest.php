<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\PlayableRaceApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 * @group functional
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\PlayableRaceApi
 */
final class PlayableRaceApiTest extends ApiTestCase
{
    private const PLAYABLE_RACE_ID = 4; // Night Elf

    public function testItRetrievesPlayableRaceIndex(): void
    {
        $client = new PlayableRaceApi($this->createBlizzardHttpClient());
        $response = $client->playableRaceIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPlayableRace(): void
    {
        $client = new PlayableRaceApi($this->createBlizzardHttpClient());
        $response = $client->playableRace(self::DEFAULT_REGION, self::PLAYABLE_RACE_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
