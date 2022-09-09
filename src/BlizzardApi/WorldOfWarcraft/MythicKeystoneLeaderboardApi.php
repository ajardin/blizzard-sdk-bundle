<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\DynamicApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class MythicKeystoneLeaderboardApi extends AbstractApi
{
    use DynamicApiTrait;

    public function leaderboardsIndex(string $region, int $connectedRealmId): ResponseInterface
    {
        return $this->get($region, "/data/wow/connected-realm/{$connectedRealmId}/mythic-leaderboard/index");
    }

    public function leaderboard(string $region, int $connectedRealmId, int $dungeonId, int $period): ResponseInterface
    {
        return $this->get($region, "/data/wow/connected-realm/{$connectedRealmId}/mythic-leaderboard/{$dungeonId}/period/{$period}");
    }
}
