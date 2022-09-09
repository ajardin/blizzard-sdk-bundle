<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class CreatureApi extends AbstractApi
{
    use StaticApiTrait;

    public function familyIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/creature-family/index');
    }

    public function family(string $region, int $creatureFamilyId): ResponseInterface
    {
        return $this->get($region, "/data/wow/creature-family/{$creatureFamilyId}");
    }

    public function typeIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/creature-type/index');
    }

    public function type(string $region, int $creatureTypeId): ResponseInterface
    {
        return $this->get($region, "/data/wow/creature-family/{$creatureTypeId}");
    }

    public function creature(string $region, int $creatureId): ResponseInterface
    {
        return $this->get($region, "/data/wow/creature/{$creatureId}");
    }

    public function search(string $region, string $name = null, string $orderBy = 'id', int $page = 1): ResponseInterface
    {
        return $this->get($region, '/data/wow/search/creature', [
            'query' => [
                'name.en_US' => $name,
                'orderby' => $orderBy,
                '_page' => $page,
            ],
        ]);
    }

    public function creatureMedia(string $region, int $creatureDisplayId): ResponseInterface
    {
        return $this->get($region, "/data/wow/media/creature-display/{$creatureDisplayId}");
    }

    public function familyMedia(string $region, int $familyDisplayId): ResponseInterface
    {
        return $this->get($region, "/data/wow/media/creature-family/{$familyDisplayId}");
    }
}
