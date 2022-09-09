<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\ProfileApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class CharacterAchievementsApi extends AbstractApi
{
    use ProfileApiTrait;

    public function summary(string $region, string $realmSlug, string $characterName): ResponseInterface
    {
        return $this->get($region, "/profile/wow/character/{$realmSlug}/{$characterName}/achievements");
    }

    public function statistics(string $region, string $realmSlug, string $characterName): ResponseInterface
    {
        return $this->get($region, "/profile/wow/character/{$realmSlug}/{$characterName}/achievements/statistics");
    }
}
