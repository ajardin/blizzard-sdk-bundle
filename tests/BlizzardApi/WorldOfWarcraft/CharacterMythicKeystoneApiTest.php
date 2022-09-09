<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterMythicKeystoneApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 * @group functional
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterMythicKeystoneApi
 */
final class CharacterMythicKeystoneApiTest extends ApiTestCase
{
    private const MYTHIC_KEYSTONE_SEASON_ID = 5; // Shadowlands season 1

    public function testItRetrievesIndex(): void
    {
        $client = new CharacterMythicKeystoneApi($this->createBlizzardHttpClient());
        $response = $client->index(self::DEFAULT_REGION, self::CHARACTER_REALM_SLUG, self::CHARACTER_NAME);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesDetails(): void
    {
        $client = new CharacterMythicKeystoneApi($this->createBlizzardHttpClient());
        $response = $client->details(self::DEFAULT_REGION, self::CHARACTER_REALM_SLUG, self::CHARACTER_NAME, self::MYTHIC_KEYSTONE_SEASON_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
