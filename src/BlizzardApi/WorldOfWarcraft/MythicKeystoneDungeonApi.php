<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\DynamicApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class MythicKeystoneDungeonApi extends AbstractApi
{
    use DynamicApiTrait;

    public function dungeonsIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/mythic-keystone/dungeon/index');
    }

    public function dungeon(string $region, int $dungeonId): ResponseInterface
    {
        return $this->get($region, "/data/wow/mythic-keystone/dungeon/{$dungeonId}");
    }

    public function periodsIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/mythic-keystone/period/index');
    }

    public function period(string $region, int $periodId): ResponseInterface
    {
        return $this->get($region, "/data/wow/mythic-keystone/period/{$periodId}");
    }

    public function seasonsIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/mythic-keystone/season/index');
    }

    public function season(string $region, int $seasonId): ResponseInterface
    {
        return $this->get($region, "/data/wow/mythic-keystone/season/{$seasonId}");
    }
}
