<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\PetApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\PetApi
 */
final class PetApiTest extends ApiTestCase
{
    private const PET_ID = 283; // Guild Herald
    private const PET_ABILITY_ID = 111; // Punch

    public function testItRetrievesPetsIndex(): void
    {
        $client = new PetApi($this->createBlizzardHttpClient());
        $response = $client->petsIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPet(): void
    {
        $client = new PetApi($this->createBlizzardHttpClient());
        $response = $client->pet(self::DEFAULT_REGION, self::PET_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPetMedia(): void
    {
        $client = new PetApi($this->createBlizzardHttpClient());
        $response = $client->petMedia(self::DEFAULT_REGION, self::PET_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPetAbilitiesIndex(): void
    {
        $client = new PetApi($this->createBlizzardHttpClient());
        $response = $client->petAbilitiesIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPetAbility(): void
    {
        $client = new PetApi($this->createBlizzardHttpClient());
        $response = $client->petAbility(self::DEFAULT_REGION, self::PET_ABILITY_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPetAbilityMedia(): void
    {
        $client = new PetApi($this->createBlizzardHttpClient());
        $response = $client->petAbilityMedia(self::DEFAULT_REGION, self::PET_ABILITY_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
