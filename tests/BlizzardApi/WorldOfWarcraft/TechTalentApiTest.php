<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\TechTalentApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 * @group functional
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\TechTalentApi
 */
final class TechTalentApiTest extends ApiTestCase
{
    private const TECH_TALENT_TREE_ID = 360; // Kleia
    private const TECH_TALENT_ID = 1368; // Mentorship

    public function testItRetrievesTechTalentTreeIndex(): void
    {
        $client = new TechTalentApi($this->createBlizzardHttpClient());
        $response = $client->techTalentTreeIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesTechTalentTree(): void
    {
        $client = new TechTalentApi($this->createBlizzardHttpClient());
        $response = $client->techTalentTree(self::DEFAULT_REGION, self::TECH_TALENT_TREE_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesTechTalentIndex(): void
    {
        $client = new TechTalentApi($this->createBlizzardHttpClient());
        $response = $client->techTalentIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesTechTalent(): void
    {
        $client = new TechTalentApi($this->createBlizzardHttpClient());
        $response = $client->techTalent(self::DEFAULT_REGION, self::TECH_TALENT_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesTechTalentMedia(): void
    {
        $client = new TechTalentApi($this->createBlizzardHttpClient());
        $response = $client->techTalentMedia(self::DEFAULT_REGION, self::TECH_TALENT_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
