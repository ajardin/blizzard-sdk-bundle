<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\ProfessionApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 * @group functional
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\ProfessionApi
 */
final class ProfessionApiTest extends ApiTestCase
{
    private const PROFESSION_ID = 202; // Engineering
    private const SKILL_TIER_ID = 2755; // Shadowlands Engineering
    private const RECIPE_ID = 4569; // Savory Deviate Delight

    public function testItRetrievesProfessionsIndex(): void
    {
        $client = new ProfessionApi($this->createBlizzardHttpClient());
        $response = $client->professionsIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesProfession(): void
    {
        $client = new ProfessionApi($this->createBlizzardHttpClient());
        $response = $client->profession(self::DEFAULT_REGION, self::PROFESSION_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesProfessionMedia(): void
    {
        $client = new ProfessionApi($this->createBlizzardHttpClient());
        $response = $client->professionMedia(self::DEFAULT_REGION, self::PROFESSION_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesSkillTier(): void
    {
        $client = new ProfessionApi($this->createBlizzardHttpClient());
        $response = $client->professionSkillTier(self::DEFAULT_REGION, self::PROFESSION_ID, self::SKILL_TIER_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesRecipe(): void
    {
        $client = new ProfessionApi($this->createBlizzardHttpClient());
        $response = $client->recipe(self::DEFAULT_REGION, self::RECIPE_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesRecipeMedia(): void
    {
        $client = new ProfessionApi($this->createBlizzardHttpClient());
        $response = $client->recipeMedia(self::DEFAULT_REGION, self::RECIPE_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
