<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\SpellApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 *
 * @group functional
 *
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\SpellApi
 */
final class SpellApiTest extends ApiTestCase
{
    private const SPELL_ID = 185438; // Shadowstrike
    private const SPELL_NAME = 'Shadowstrike';

    public function testItRetrievesSpell(): void
    {
        $client = new SpellApi($this->createBlizzardHttpClient());
        $response = $client->spell(self::DEFAULT_REGION, self::SPELL_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesSpellMedia(): void
    {
        $client = new SpellApi($this->createBlizzardHttpClient());
        $response = $client->spellMedia(self::DEFAULT_REGION, self::SPELL_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItSearchesSpellsByName(): void
    {
        $client = new SpellApi($this->createBlizzardHttpClient());
        $response = $client->search(self::DEFAULT_REGION, self::SPELL_NAME);

        $this->assertSearchIsSuccessful($response);
    }
}
