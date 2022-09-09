<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\TalentApi;
use Ajardin\BlizzardSdkBundle\Tests\BlizzardApi\ApiTestCase;

/**
 * @internal
 * @group functional
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\TalentApi
 */
final class TalentApiTest extends ApiTestCase
{
    private const TALENT_ID = 19234; // Premeditation
    private const PVP_TALENT_ID = 153; // Shadowy Duel

    public function testItRetrievesTalentIndex(): void
    {
        $client = new TalentApi($this->createBlizzardHttpClient());
        $response = $client->talentIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesTalent(): void
    {
        $client = new TalentApi($this->createBlizzardHttpClient());
        $response = $client->talent(self::DEFAULT_REGION, self::TALENT_ID);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPvpTalentIndex(): void
    {
        $client = new TalentApi($this->createBlizzardHttpClient());
        $response = $client->pvpTalentIndex(self::DEFAULT_REGION);

        $this->assertRequestIsSuccessful($response);
    }

    public function testItRetrievesPvpTalent(): void
    {
        $client = new TalentApi($this->createBlizzardHttpClient());
        $response = $client->pvpTalent(self::DEFAULT_REGION, self::PVP_TALENT_ID);

        $this->assertRequestIsSuccessful($response);
    }
}
