<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterPvpApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterPvpApi
 */
final class CharacterPvpApiTest extends ApiTestCase
{
    private const PVP_BRACKET = '3v3';

    public function testItRetrievesBracketStatistics(): void
    {
        $client = new CharacterPvpApi($this->createBlizzardHttpClient());
        $response = $client->bracketStatistics(self::DEFAULT_REGION, self::CHARACTER_REALM_SLUG, self::CHARACTER_NAME, self::PVP_BRACKET);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPvpSummary(): void
    {
        $client = new CharacterPvpApi($this->createBlizzardHttpClient());
        $response = $client->pvpSummary(self::DEFAULT_REGION, self::CHARACTER_REALM_SLUG, self::CHARACTER_NAME);

        $this->assertRequestIsSuccessful($response);
    }
}
