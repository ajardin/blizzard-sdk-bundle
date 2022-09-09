<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\GuildCrestApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 * @group functional
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\GuildCrestApi
 */
final class GuildCrestApiTest extends ApiTestCase
{
    public function testItRetrievesComponentIndex(): void
    {
        $client = new GuildCrestApi($this->createBlizzardHttpClient());
        $response = $client->componentIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesBorderMedia(): void
    {
        $client = new GuildCrestApi($this->createBlizzardHttpClient());
        $response = $client->borderMedia(self::DEFAULT_REGION, 0);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesEmblemMedia(): void
    {
        $client = new GuildCrestApi($this->createBlizzardHttpClient());
        $response = $client->emblemMedia(self::DEFAULT_REGION, 0);

        $this->assertRequestIsSuccessful($response);
    }
}
