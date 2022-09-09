<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class TechTalentApi extends AbstractApi
{
    use StaticApiTrait;

    public function techTalentTreeIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/tech-talent-tree/index');
    }

    public function techTalentTree(string $region, int $techTalentTreeId): ResponseInterface
    {
        return $this->get($region, "/data/wow/tech-talent-tree/{$techTalentTreeId}");
    }

    public function techTalentIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/tech-talent/index');
    }

    public function techTalent(string $region, int $techTalentId): ResponseInterface
    {
        return $this->get($region, "/data/wow/tech-talent/{$techTalentId}");
    }

    public function techTalentMedia(string $region, int $techTalentId): ResponseInterface
    {
        return $this->get($region, "/data/wow/media/tech-talent/{$techTalentId}");
    }
}
