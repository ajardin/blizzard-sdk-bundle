<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\ItemApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 * @group functional
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\ItemApi
 */
final class ItemApiTest extends ApiTestCase
{
    private const ITEM_CLASS_ID = 2; // Weapon
    private const ITEM_SET_ID = 524; // Bonescythe Armor
    private const ITEM_SUBCLASS_ID = 15; // Daggers
    private const ITEM_ID = 19019; // Thunderfury, Blessed Blade of the Windseeker

    public function testItRetrievesItemClassesIndex(): void
    {
        $client = new ItemApi($this->createBlizzardHttpClient());
        $response = $client->itemClassesIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesItemClass(): void
    {
        $client = new ItemApi($this->createBlizzardHttpClient());
        $response = $client->itemClass(self::DEFAULT_REGION, self::ITEM_CLASS_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesItemSetsIndex(): void
    {
        $client = new ItemApi($this->createBlizzardHttpClient());
        $response = $client->itemSetsIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesItemSet(): void
    {
        $client = new ItemApi($this->createBlizzardHttpClient());
        $response = $client->itemSet(self::DEFAULT_REGION, self::ITEM_SET_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesItemSubclass(): void
    {
        $client = new ItemApi($this->createBlizzardHttpClient());
        $response = $client->itemSubclass(self::DEFAULT_REGION, self::ITEM_CLASS_ID, self::ITEM_SUBCLASS_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesItem(): void
    {
        $client = new ItemApi($this->createBlizzardHttpClient());
        $response = $client->item(self::DEFAULT_REGION, self::ITEM_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesItemMedia(): void
    {
        $client = new ItemApi($this->createBlizzardHttpClient());
        $response = $client->itemMedia(self::DEFAULT_REGION, self::ITEM_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItSearchesItemsByName(): void
    {
        $client = new ItemApi($this->createBlizzardHttpClient());
        $response = $client->itemSearch(self::DEFAULT_REGION, 'Thunderfury');

        $this->assertSearchIsSuccessful($response);
    }
}
