<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\ReputationApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 * @group functional
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\ReputationApi
 */
final class ReputationApiTest extends ApiTestCase
{
    private const REPUTATION_FACTION_ID = 349; // Ravenholdt
    private const REPUTATION_TIERS_ID = 209; // Chromie

    public function testItRetrievesReputationFactionsIndex(): void
    {
        $client = new ReputationApi($this->createBlizzardHttpClient());
        $response = $client->reputationFactionsIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesReputationFaction(): void
    {
        $client = new ReputationApi($this->createBlizzardHttpClient());
        $response = $client->reputationFaction(self::DEFAULT_REGION, self::REPUTATION_FACTION_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesReputationTiersIndex(): void
    {
        $client = new ReputationApi($this->createBlizzardHttpClient());
        $response = $client->reputationTiersIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesReputationTiers(): void
    {
        $client = new ReputationApi($this->createBlizzardHttpClient());
        $response = $client->reputationTiers(self::DEFAULT_REGION, self::REPUTATION_TIERS_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
