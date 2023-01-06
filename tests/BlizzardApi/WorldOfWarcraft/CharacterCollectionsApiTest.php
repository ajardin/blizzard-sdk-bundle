<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterCollectionsApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterCollectionsApi
 */
final class CharacterCollectionsApiTest extends ApiTestCase
{
    public function testItRetrievesIndex(): void
    {
        $client = new CharacterCollectionsApi($this->createBlizzardHttpClient());
        $response = $client->index(self::DEFAULT_REGION, self::CHARACTER_REALM_SLUG, self::CHARACTER_NAME);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesMountsCollectionSummary(): void
    {
        $client = new CharacterCollectionsApi($this->createBlizzardHttpClient());
        $response = $client->mountsCollectionSummary(self::DEFAULT_REGION, self::CHARACTER_REALM_SLUG, self::CHARACTER_NAME);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPetsCollectionSummary(): void
    {
        $client = new CharacterCollectionsApi($this->createBlizzardHttpClient());
        $response = $client->petsCollectionSummary(self::DEFAULT_REGION, self::CHARACTER_REALM_SLUG, self::CHARACTER_NAME);

        $this->assertRequestIsSuccessful($response);
    }
}
