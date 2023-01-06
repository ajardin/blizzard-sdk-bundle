<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\PlayableClassApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\PlayableClassApi
 */
final class PlayableClassApiTest extends ApiTestCase
{
    private const PLAYABLE_CLASS_ID = 4; // Rogue

    public function testItRetrievesPlayableClassIndex(): void
    {
        $client = new PlayableClassApi($this->createBlizzardHttpClient());
        $response = $client->playableClassIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPlayableClass(): void
    {
        $client = new PlayableClassApi($this->createBlizzardHttpClient());
        $response = $client->playableClass(self::DEFAULT_REGION, self::PLAYABLE_CLASS_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPlayableClassMedia(): void
    {
        $client = new PlayableClassApi($this->createBlizzardHttpClient());
        $response = $client->playableClassMedia(self::DEFAULT_REGION, self::PLAYABLE_CLASS_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPlayableClassPvpTalentSlots(): void
    {
        $client = new PlayableClassApi($this->createBlizzardHttpClient());
        $response = $client->pvpTalentSlots(self::DEFAULT_REGION, self::PLAYABLE_CLASS_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
