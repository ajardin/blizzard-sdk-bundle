<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\QuestApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\QuestApi
 */
final class QuestApiTest extends ApiTestCase
{
    private const QUEST_ID = 30118; // Patricide
    private const QUEST_CATEGORY_ID = 162; // Rogue
    private const QUEST_AREA_ID = 12; // Elwynn Forest
    private const QUEST_TYPE_ID = 83; // Legendary

    public function testItRetrieveQuestsIndex(): void
    {
        $client = new QuestApi($this->createBlizzardHttpClient());
        $response = $client->questsIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesQuest(): void
    {
        $client = new QuestApi($this->createBlizzardHttpClient());
        $response = $client->quest(self::DEFAULT_REGION, self::QUEST_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesQuestCategoriesIndex(): void
    {
        $client = new QuestApi($this->createBlizzardHttpClient());
        $response = $client->questCategoriesIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesQuestCategory(): void
    {
        $client = new QuestApi($this->createBlizzardHttpClient());
        $response = $client->questCategory(self::DEFAULT_REGION, self::QUEST_CATEGORY_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesQuestAreasIndex(): void
    {
        $client = new QuestApi($this->createBlizzardHttpClient());
        $response = $client->questAreasIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesQuestArea(): void
    {
        $client = new QuestApi($this->createBlizzardHttpClient());
        $response = $client->questArea(self::DEFAULT_REGION, self::QUEST_AREA_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesQuestTypesIndex(): void
    {
        $client = new QuestApi($this->createBlizzardHttpClient());
        $response = $client->questTypesIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesQuestType(): void
    {
        $client = new QuestApi($this->createBlizzardHttpClient());
        $response = $client->questType(self::DEFAULT_REGION, self::QUEST_TYPE_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
