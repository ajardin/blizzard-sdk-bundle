<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

class AzeriteEssenceApi extends AbstractApi
{
    use StaticApiTrait;

    public function azeriteIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/azerite-essence/index');
    }

    public function azeriteEssence(string $region, int $azeriteEssenceId): ResponseInterface
    {
        return $this->get($region, "/data/wow/azerite-essence/{$azeriteEssenceId}");
    }

    public function search(string $region, ?int $allowedSpecializationId = null, string $orderBy = 'id', int $page = 1): ResponseInterface
    {
        return $this->get($region, '/data/wow/search/azerite-essence', [
            'query' => [
                'allowed_specializations.id' => $allowedSpecializationId,
                'orderby' => $orderBy,
                '_page' => $page,
            ],
        ]);
    }

    public function media(string $region, int $azeriteEssenceId): ResponseInterface
    {
        return $this->get($region, "/data/wow/media/azerite-essence/{$azeriteEssenceId}");
    }
}
