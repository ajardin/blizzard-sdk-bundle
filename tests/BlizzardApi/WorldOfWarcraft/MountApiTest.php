<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\MountApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\MountApi
 */
final class MountApiTest extends ApiTestCase
{
    private const MOUNT_ID = 363; // Invincible

    public function testItRetrievesMountsIndex(): void
    {
        $client = new MountApi($this->createBlizzardHttpClient());
        $response = $client->mountsIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesMount(): void
    {
        $client = new MountApi($this->createBlizzardHttpClient());
        $response = $client->mount(self::DEFAULT_REGION, self::MOUNT_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItSearchesMountsByName(): void
    {
        $client = new MountApi($this->createBlizzardHttpClient());
        $response = $client->search(self::DEFAULT_REGION, 'Invincible');

        $this->assertSearchIsSuccessful($response);
    }
}
