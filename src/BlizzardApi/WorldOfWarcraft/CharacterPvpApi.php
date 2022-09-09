<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\ProfileApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class CharacterPvpApi extends AbstractApi
{
    use ProfileApiTrait;

    public function bracketStatistics(string $region, string $realmSlug, string $characterName, string $pvpBracket): ResponseInterface
    {
        return $this->get($region, "/profile/wow/character/{$realmSlug}/{$characterName}/pvp-bracket/{$pvpBracket}");
    }

    public function pvpSummary(string $region, string $realmSlug, string $characterName): ResponseInterface
    {
        return $this->get($region, "/profile/wow/character/{$realmSlug}/{$characterName}/pvp-summary");
    }
}
