<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\JournalApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\JournalApi
 */
final class JournalApiTest extends ApiTestCase
{
    private const JOURNAL_EXPANSION_ID = 68; // Classic
    private const JOURNAL_ENCOUNTER_ID = 198; // Ragnaros
    private const JOURNAL_INSTANCE_ID = 741; // Molten Core

    public function testItRetrievesJournalExpansionsIndex(): void
    {
        $client = new JournalApi($this->createBlizzardHttpClient());
        $response = $client->journalExpansionsIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesJournalExpansion(): void
    {
        $client = new JournalApi($this->createBlizzardHttpClient());
        $response = $client->journalExpansion(self::DEFAULT_REGION, self::JOURNAL_EXPANSION_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesEncountersIndex(): void
    {
        $client = new JournalApi($this->createBlizzardHttpClient());
        $response = $client->journalEncountersIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesEncounter(): void
    {
        $client = new JournalApi($this->createBlizzardHttpClient());
        $response = $client->journalEncounter(self::DEFAULT_REGION, self::JOURNAL_ENCOUNTER_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItSearchesEncountersByInstanceName(): void
    {
        $client = new JournalApi($this->createBlizzardHttpClient());
        $response = $client->searchJournalEncounter(self::DEFAULT_REGION, 'Molten Core');

        $this->assertSearchIsSuccessful($response);
    }

    public function testItRetrievesInstancesIndex(): void
    {
        $client = new JournalApi($this->createBlizzardHttpClient());
        $response = $client->journalInstancesIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesInstance(): void
    {
        $client = new JournalApi($this->createBlizzardHttpClient());
        $response = $client->journalInstance(self::DEFAULT_REGION, self::JOURNAL_INSTANCE_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesInstanceMedia(): void
    {
        $client = new JournalApi($this->createBlizzardHttpClient());
        $response = $client->journalInstanceMedia(self::DEFAULT_REGION, self::JOURNAL_INSTANCE_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
