<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class QuestApi extends AbstractApi
{
    use StaticApiTrait;

    public function questsIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/quest/index');
    }

    public function quest(string $region, int $questId): ResponseInterface
    {
        return $this->get($region, "/data/wow/quest/{$questId}");
    }

    public function questCategoriesIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/quest/category/index');
    }

    public function questCategory(string $region, int $questCategoryId): ResponseInterface
    {
        return $this->get($region, "/data/wow/quest/category/{$questCategoryId}");
    }

    public function questAreasIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/quest/area/index');
    }

    public function questArea(string $region, int $questAreaId): ResponseInterface
    {
        return $this->get($region, "/data/wow/quest/area/{$questAreaId}");
    }

    public function questTypesIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/quest/type/index');
    }

    public function questType(string $region, int $questTypeId): ResponseInterface
    {
        return $this->get($region, "/data/wow/quest/type/{$questTypeId}");
    }
}
