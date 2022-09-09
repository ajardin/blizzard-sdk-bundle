<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\DynamicApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class MythicRaidLeaderboardApi extends AbstractApi
{
    use DynamicApiTrait;

    public function leaderboard(string $region, string $raid, string $faction): ResponseInterface
    {
        return $this->get($region, "/data/wow/leaderboard/hall-of-fame/{$raid}/{$faction}");
    }
}
