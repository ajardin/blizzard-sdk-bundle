<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterHunterPetsApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 * @group functional
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterHunterPetsApi
 */
final class CharacterHunterPetsApiTest extends ApiTestCase
{
    public function testItRetrievesSummary(): void
    {
        $client = new CharacterHunterPetsApi($this->createBlizzardHttpClient());
        $response = $client->summary(self::DEFAULT_REGION, self::CHARACTER_REALM_SLUG, self::CHARACTER_NAME);

        $this->assertRequestIsSuccessful($response);
    }
}
