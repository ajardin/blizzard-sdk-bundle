<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\RegionApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\RegionApi
 */
final class RegionApiTest extends ApiTestCase
{
    private const REGION_ID = 3; // Europe

    public function testItRetrievesRegionsIndex(): void
    {
        $client = new RegionApi($this->createBlizzardHttpClient());
        $response = $client->regionsIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesRegion(): void
    {
        $client = new RegionApi($this->createBlizzardHttpClient());
        $response = $client->region(self::DEFAULT_REGION, self::REGION_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
