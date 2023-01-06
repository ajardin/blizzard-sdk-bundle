<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\PowerTypeApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\PowerTypeApi
 */
final class PowerTypeApiTest extends ApiTestCase
{
    private const POWER_TYPE_ID = 3; // Energy

    public function testItRetrievesPowerTypeIndex(): void
    {
        $client = new PowerTypeApi($this->createBlizzardHttpClient());
        $response = $client->powerTypeIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItGetsPowerType(): void
    {
        $client = new PowerTypeApi($this->createBlizzardHttpClient());
        $response = $client->powerType(self::DEFAULT_REGION, self::POWER_TYPE_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
