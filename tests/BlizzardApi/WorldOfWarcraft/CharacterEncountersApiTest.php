<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterEncountersApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterEncountersApi
 */
final class CharacterEncountersApiTest extends ApiTestCase
{
    public function testItRetrievesSummary(): void
    {
        $client = new CharacterEncountersApi($this->createBlizzardHttpClient());
        $response = $client->summary(self::DEFAULT_REGION, self::CHARACTER_REALM_SLUG, self::CHARACTER_NAME);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesDungeons(): void
    {
        $client = new CharacterEncountersApi($this->createBlizzardHttpClient());
        $response = $client->dungeons(self::DEFAULT_REGION, self::CHARACTER_REALM_SLUG, self::CHARACTER_NAME);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesRaids(): void
    {
        $client = new CharacterEncountersApi($this->createBlizzardHttpClient());
        $response = $client->dungeons(self::DEFAULT_REGION, self::CHARACTER_REALM_SLUG, self::CHARACTER_NAME);

        $this->assertRequestIsSuccessful($response);
    }
}
