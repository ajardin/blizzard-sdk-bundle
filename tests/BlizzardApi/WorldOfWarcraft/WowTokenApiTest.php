<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\WowTokenApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\WowTokenApi
 */
final class WowTokenApiTest extends ApiTestCase
{
    public function testItRetrievesIndex(): void
    {
        $client = new WowTokenApi($this->createBlizzardHttpClient());
        $response = $client->index(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }
}
