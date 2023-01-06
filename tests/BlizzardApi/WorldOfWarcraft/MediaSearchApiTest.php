<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\MediaSearchApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\MediaSearchApi
 */
final class MediaSearchApiTest extends ApiTestCase
{
    public function testItSearchesByTags(): void
    {
        $client = new MediaSearchApi($this->createBlizzardHttpClient());
        $response = $client->search(self::DEFAULT_REGION, 'item');

        $this->assertSearchIsSuccessful($response);
    }
}
