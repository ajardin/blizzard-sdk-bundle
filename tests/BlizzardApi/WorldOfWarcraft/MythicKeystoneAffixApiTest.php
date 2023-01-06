<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\MythicKeystoneAffixApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\MythicKeystoneAffixApi
 */
final class MythicKeystoneAffixApiTest extends ApiTestCase
{
    private const MYTHIC_AFFIX_ID = 129; // Infernal

    public function testItRetrievesAffixesIndex(): void
    {
        $client = new MythicKeystoneAffixApi($this->createBlizzardHttpClient());
        $response = $client->affixesIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesAffix(): void
    {
        $client = new MythicKeystoneAffixApi($this->createBlizzardHttpClient());
        $response = $client->affix(self::DEFAULT_REGION, self::MYTHIC_AFFIX_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesAffixMedia(): void
    {
        $client = new MythicKeystoneAffixApi($this->createBlizzardHttpClient());
        $response = $client->affixMedia(self::DEFAULT_REGION, self::MYTHIC_AFFIX_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
