<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\AuctionHouseApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 * @group functional
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\AuctionHouseApi
 */
final class AuctionHouseApiTest extends ApiTestCase
{
    private const CONNECTED_REALM_ID = 1315; // Elune x Varimathras

    public function testItRetrievesAuctions(): void
    {
        $client = new AuctionHouseApi($this->createBlizzardHttpClient());
        $response = $client->auctions(self::DEFAULT_REGION, self::CONNECTED_REALM_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
