<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CreatureApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;
use Symfony\Component\HttpFoundation\Response;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CreatureApi
 */
final class CreatureApiTest extends ApiTestCase
{
    private const FAMILY_ID = 1; // Wolf
    private const TYPE_ID = 1; // Beast
    private const CREATURE_NAME = 'Wolf';
    private const CREATURE_ID = 176645; // Elite Wolf
    private const CREATURE_DISPLAY_ID = 100492; // Elite Wolf

    public function testItRetrievesFamilyIndex(): void
    {
        $client = new CreatureApi($this->createBlizzardHttpClient());
        $response = $client->familyIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesFamily(): void
    {
        $client = new CreatureApi($this->createBlizzardHttpClient());
        $response = $client->family(self::DEFAULT_REGION, self::FAMILY_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesTypeIndex(): void
    {
        $client = new CreatureApi($this->createBlizzardHttpClient());
        $response = $client->typeIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesType(): void
    {
        $client = new CreatureApi($this->createBlizzardHttpClient());
        $response = $client->type(self::DEFAULT_REGION, self::TYPE_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesCreature(): void
    {
        $client = new CreatureApi($this->createBlizzardHttpClient());
        $response = $client->creature(self::DEFAULT_REGION, self::CREATURE_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItSearchesCreaturesByName(): void
    {
        $client = new CreatureApi($this->createBlizzardHttpClient());
        $response = $client->search(self::DEFAULT_REGION, self::CREATURE_NAME);

        static::assertSame(Response::HTTP_OK, $response->getStatusCode());

        $content = $response->toArray();
        static::assertArrayHasKey('results', $content);
    }

    public function testItRetrievesCreatureMedia(): void
    {
        $client = new CreatureApi($this->createBlizzardHttpClient());
        $response = $client->creatureMedia(self::DEFAULT_REGION, self::CREATURE_DISPLAY_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesFamilyMedia(): void
    {
        $client = new CreatureApi($this->createBlizzardHttpClient());
        $response = $client->familyMedia(self::DEFAULT_REGION, self::FAMILY_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
