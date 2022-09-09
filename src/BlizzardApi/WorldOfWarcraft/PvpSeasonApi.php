<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\DynamicApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class PvpSeasonApi extends AbstractApi
{
    use DynamicApiTrait;

    public function pvpSeasonIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/pvp-season/index');
    }

    public function pvpSeason(string $region, int $pvpSeasonId): ResponseInterface
    {
        return $this->get($region, "/data/wow/pvp-season/{$pvpSeasonId}");
    }

    public function pvpLeaderboardIndex(string $region, int $pvpSeasonId): ResponseInterface
    {
        return $this->get($region, "/data/wow/pvp-season/{$pvpSeasonId}/pvp-leaderboard/index");
    }

    public function pvpLeaderboard(string $region, int $pvpSeasonId, string $bracket): ResponseInterface
    {
        return $this->get($region, "/data/wow/pvp-season/{$pvpSeasonId}/pvp-leaderboard/{$bracket}");
    }

    public function pvpRewardIndex(string $region, int $pvpSeasonId): ResponseInterface
    {
        return $this->get($region, "/data/wow/pvp-season/{$pvpSeasonId}/pvp-reward/index");
    }
}
