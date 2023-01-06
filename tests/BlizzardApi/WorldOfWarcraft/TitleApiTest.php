<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\TitleApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\TitleApi
 */
final class TitleApiTest extends ApiTestCase
{
    private const TITLE_ID = 110; // Jenkins

    public function testItRetrievesTitleIndex(): void
    {
        $client = new TitleApi($this->createBlizzardHttpClient());
        $response = $client->titleIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesTitle(): void
    {
        $client = new TitleApi($this->createBlizzardHttpClient());
        $response = $client->title(self::DEFAULT_REGION, self::TITLE_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
