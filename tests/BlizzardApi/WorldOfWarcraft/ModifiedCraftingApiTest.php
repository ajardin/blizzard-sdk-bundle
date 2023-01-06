<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\ModifiedCraftingApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\ModifiedCraftingApi
 */
final class ModifiedCraftingApiTest extends ApiTestCase
{
    private const MODIFIED_CRAFTING_CATEGORY_ID = 1;
    private const MODIFIED_CRAFTING_SLOT_ID = 16;

    public function testItRetrievesModifiedCraftingIndex(): void
    {
        $client = new ModifiedCraftingApi($this->createBlizzardHttpClient());
        $response = $client->modifiedCraftingIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesModifiedCraftingCategoryIndex(): void
    {
        $client = new ModifiedCraftingApi($this->createBlizzardHttpClient());
        $response = $client->modifiedCraftingCategoryIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesModifiedCraftingCategory(): void
    {
        $client = new ModifiedCraftingApi($this->createBlizzardHttpClient());
        $response = $client->modifiedCraftingCategory(self::DEFAULT_REGION, self::MODIFIED_CRAFTING_CATEGORY_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesModifiedCraftingReagentSlotTypeIndex(): void
    {
        $client = new ModifiedCraftingApi($this->createBlizzardHttpClient());
        $response = $client->modifiedCraftingReagentSlotTypeIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesModifiedCraftingReagentSlotType(): void
    {
        $client = new ModifiedCraftingApi($this->createBlizzardHttpClient());
        $response = $client->modifiedCraftingReagentSlotType(self::DEFAULT_REGION, self::MODIFIED_CRAFTING_SLOT_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
