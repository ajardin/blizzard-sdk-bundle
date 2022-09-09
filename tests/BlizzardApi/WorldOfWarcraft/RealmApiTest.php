<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\RealmApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 * @group functional
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\RealmApi
 */
final class RealmApiTest extends ApiTestCase
{
    private const REALM_NAME = 'elune';
    private const REALM_TIMEZONE = 'Europe/Paris';

    public function testItRetrievesRealmIndex(): void
    {
        $client = new RealmApi($this->createBlizzardHttpClient());
        $response = $client->realmIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesRealm(): void
    {
        $client = new RealmApi($this->createBlizzardHttpClient());
        $response = $client->realm(self::DEFAULT_REGION, self::REALM_NAME);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItSearchesRealmsByTimezone(): void
    {
        $client = new RealmApi($this->createBlizzardHttpClient());
        $response = $client->search(self::DEFAULT_REGION, self::REALM_TIMEZONE);

        $this->assertSearchIsSuccessful($response);
    }
}
