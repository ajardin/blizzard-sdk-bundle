<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\PvpTierApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 * @group functional
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\PvpTierApi
 */
final class PvpTierApiTest extends ApiTestCase
{
    private const PVP_TIER_ID = 6; // Elite

    public function testItRetrievesPvpTierIndex(): void
    {
        $client = new PvpTierApi($this->createBlizzardHttpClient());
        $response = $client->pvpTierIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPvpTier(): void
    {
        $client = new PvpTierApi($this->createBlizzardHttpClient());
        $response = $client->pvpTier(self::DEFAULT_REGION, self::PVP_TIER_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPvpTierMedia(): void
    {
        $client = new PvpTierApi($this->createBlizzardHttpClient());
        $response = $client->pvpTierMedia(self::DEFAULT_REGION, self::PVP_TIER_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
