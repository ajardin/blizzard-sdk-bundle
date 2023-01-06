<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\PlayableSpecializationApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\PlayableSpecializationApi
 */
final class PlayableSpecializationApiTest extends ApiTestCase
{
    private const PLAYABLE_SPECIALIZATION_ID = 261; // Rogue Subtlety

    public function testItRetrievesPlayableSpecializationIndex(): void
    {
        $client = new PlayableSpecializationApi($this->createBlizzardHttpClient());
        $response = $client->playableSpecializationIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPlayableSpecialization(): void
    {
        $client = new PlayableSpecializationApi($this->createBlizzardHttpClient());
        $response = $client->playableSpecialization(self::DEFAULT_REGION, self::PLAYABLE_SPECIALIZATION_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPlayableSpecializationMedia(): void
    {
        $client = new PlayableSpecializationApi($this->createBlizzardHttpClient());
        $response = $client->playableSpecializationMedia(self::DEFAULT_REGION, self::PLAYABLE_SPECIALIZATION_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
