<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CovenantApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 * @group functional
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CovenantApi
 */
final class CovenantApiTest extends ApiTestCase
{
    private const COVENANT_ID = 1; // Kyrian
    private const SOULBIND_ID = 7; // Pelagos
    private const CONDUIT_ID = 225; // Reverberation

    public function testItRetrievesCovenantIndex(): void
    {
        $client = new CovenantApi($this->createBlizzardHttpClient());
        $response = $client->covenantIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesCovenant(): void
    {
        $client = new CovenantApi($this->createBlizzardHttpClient());
        $response = $client->covenant(self::DEFAULT_REGION, self::COVENANT_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesCovenantMedia(): void
    {
        $client = new CovenantApi($this->createBlizzardHttpClient());
        $response = $client->covenantMedia(self::DEFAULT_REGION, self::COVENANT_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesSoulbindIndex(): void
    {
        $client = new CovenantApi($this->createBlizzardHttpClient());
        $response = $client->soulbindIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesSoulbind(): void
    {
        $client = new CovenantApi($this->createBlizzardHttpClient());
        $response = $client->soulbind(self::DEFAULT_REGION, self::SOULBIND_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesConduitIndex(): void
    {
        $client = new CovenantApi($this->createBlizzardHttpClient());
        $response = $client->conduitIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesConduit(): void
    {
        $client = new CovenantApi($this->createBlizzardHttpClient());
        $response = $client->conduit(self::DEFAULT_REGION, self::CONDUIT_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
