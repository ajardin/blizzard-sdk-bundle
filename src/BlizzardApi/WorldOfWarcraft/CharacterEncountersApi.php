<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\ProfileApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class CharacterEncountersApi extends AbstractApi
{
    use ProfileApiTrait;

    public function summary(string $region, string $realmSlug, string $characterName): ResponseInterface
    {
        return $this->get($region, "/profile/wow/character/{$realmSlug}/{$characterName}/encounters");
    }

    public function dungeons(string $region, string $realmSlug, string $characterName): ResponseInterface
    {
        return $this->get($region, "/profile/wow/character/{$realmSlug}/{$characterName}/encounters/dungeons");
    }

    public function raids(string $region, string $realmSlug, string $characterName): ResponseInterface
    {
        return $this->get($region, "/profile/wow/character/{$realmSlug}/{$characterName}/encounters/raids");
    }
}
