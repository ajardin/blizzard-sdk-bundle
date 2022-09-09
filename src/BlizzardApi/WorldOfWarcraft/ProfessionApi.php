<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class ProfessionApi extends AbstractApi
{
    use StaticApiTrait;

    public function professionsIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/profession/index');
    }

    public function profession(string $region, int $professionId): ResponseInterface
    {
        return $this->get($region, "/data/wow/profession/{$professionId}");
    }

    public function professionMedia(string $region, int $professionId): ResponseInterface
    {
        return $this->get($region, "/data/wow/media/profession/{$professionId}");
    }

    public function professionSkillTier(string $region, int $professionId, int $skillTierId): ResponseInterface
    {
        return $this->get($region, "/data/wow/profession/{$professionId}/skill-tier/{$skillTierId}");
    }

    public function recipe(string $region, int $recipeId): ResponseInterface
    {
        return $this->get($region, "/data/wow/recipe/{$recipeId}");
    }

    public function recipeMedia(string $region, int $recipeId): ResponseInterface
    {
        return $this->get($region, "/data/wow/media/recipe/{$recipeId}");
    }
}
