<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\AzeriteEssenceApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;
use Symfony\Component\HttpFoundation\Response;

/**
 * @internal
 * @group functional
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\AzeriteEssenceApi
 */
final class AzeriteEssenceApiTest extends ApiTestCase
{
    private const AZERITE_ESSENCE_ID = 4; // Worldvein Resonance
    private const SPECIALIZATION_ID = 261; // Rogue Subtlety

    public function testItRetrievesAzeriteIndex(): void
    {
        $client = new AzeriteEssenceApi($this->createBlizzardHttpClient());
        $response = $client->azeriteIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesAzeriteEssence(): void
    {
        $client = new AzeriteEssenceApi($this->createBlizzardHttpClient());
        $response = $client->azeriteEssence(self::DEFAULT_REGION, self::AZERITE_ESSENCE_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItSearchesBySpecializationId(): void
    {
        $client = new AzeriteEssenceApi($this->createBlizzardHttpClient());
        $response = $client->search(self::DEFAULT_REGION, self::SPECIALIZATION_ID);

        static::assertSame(Response::HTTP_OK, $response->getStatusCode());

        $content = $response->toArray();
        static::assertArrayHasKey('results', $content);
    }

    public function testItRetrievesMedia(): void
    {
        $client = new AzeriteEssenceApi($this->createBlizzardHttpClient());
        $response = $client->media(self::DEFAULT_REGION, self::AZERITE_ESSENCE_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
