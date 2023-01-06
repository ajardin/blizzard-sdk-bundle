<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\GuildApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\GuildApi
 */
final class GuildApiTest extends ApiTestCase
{
    private const GUILD_REALM_SLUG = 'tarren-mill';
    private const GUILD_NAME = 'echo';

    public function testItRetrievesSummary(): void
    {
        $client = new GuildApi($this->createBlizzardHttpClient());
        $response = $client->guild(self::DEFAULT_REGION, self::GUILD_REALM_SLUG, self::GUILD_NAME);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesActivity(): void
    {
        $client = new GuildApi($this->createBlizzardHttpClient());
        $response = $client->activity(self::DEFAULT_REGION, self::GUILD_REALM_SLUG, self::GUILD_NAME);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesAchievements(): void
    {
        $client = new GuildApi($this->createBlizzardHttpClient());
        $response = $client->achievements(self::DEFAULT_REGION, self::GUILD_REALM_SLUG, self::GUILD_NAME);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesRoster(): void
    {
        $client = new GuildApi($this->createBlizzardHttpClient());
        $response = $client->roster(self::DEFAULT_REGION, self::GUILD_REALM_SLUG, self::GUILD_NAME);

        $this->assertRequestIsSuccessful($response);
    }
}
