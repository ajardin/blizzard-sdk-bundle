<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class TalentApi extends AbstractApi
{
    use StaticApiTrait;

    public function talentTreeIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/talent-tree/index');
    }

    public function talentTree(string $region, int $talentTreeId, ?int $specializationId = null): ResponseInterface
    {
        return $specializationId !== null
            ? $this->get($region, "/data/wow/talent-tree/{$talentTreeId}/playable-specialization/{$specializationId}")
            : $this->get($region, "/data/wow/talent-tree/{$talentTreeId}")
        ;
    }

    public function talentIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/talent/index');
    }

    public function talent(string $region, int $talentId): ResponseInterface
    {
        return $this->get($region, "/data/wow/talent/{$talentId}");
    }

    public function pvpTalentIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/pvp-talent/index');
    }

    public function pvpTalent(string $region, int $pvpTalentId): ResponseInterface
    {
        return $this->get($region, "/data/wow/pvp-talent/{$pvpTalentId}");
    }
}
