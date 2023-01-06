<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\AchievementApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\AchievementApi
 */
final class AchievementApiTest extends ApiTestCase
{
    private const ACHIEVEMENT_CATEGORY_ID = 15077; // Quests
    private const ACHIEVEMENT_ID = 7520; // The Loremaster

    public function testItRetrievesCategoryIndex(): void
    {
        $client = new AchievementApi($this->createBlizzardHttpClient());
        $response = $client->categoryIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesCategory(): void
    {
        $client = new AchievementApi($this->createBlizzardHttpClient());
        $response = $client->category(self::DEFAULT_REGION, self::ACHIEVEMENT_CATEGORY_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesAchievementIndex(): void
    {
        $client = new AchievementApi($this->createBlizzardHttpClient());
        $response = $client->achievementIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesAchievement(): void
    {
        $client = new AchievementApi($this->createBlizzardHttpClient());
        $response = $client->achievement(self::DEFAULT_REGION, self::ACHIEVEMENT_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesAchievementMedia(): void
    {
        $client = new AchievementApi($this->createBlizzardHttpClient());
        $response = $client->achievementMedia(self::DEFAULT_REGION, self::ACHIEVEMENT_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
