<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterQuestsApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 * @group functional
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\CharacterQuestsApi
 */
final class CharacterQuestsApiTest extends ApiTestCase
{
    public function testItRetrievesQuests(): void
    {
        $client = new CharacterQuestsApi($this->createBlizzardHttpClient());
        $response = $client->quests(self::DEFAULT_REGION, self::CHARACTER_REALM_SLUG, self::CHARACTER_NAME);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesQuestsCompleted(): void
    {
        $client = new CharacterQuestsApi($this->createBlizzardHttpClient());
        $response = $client->questsCompleted(self::DEFAULT_REGION, self::CHARACTER_REALM_SLUG, self::CHARACTER_NAME);

        $this->assertRequestIsSuccessful($response);
    }
}
