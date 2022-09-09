<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

class AchievementApi extends AbstractApi
{
    use StaticApiTrait;

    public function categoryIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/achievement-category/index');
    }

    public function category(string $region, int $achievementCategoryId): ResponseInterface
    {
        return $this->get($region, "/data/wow/achievement-category/{$achievementCategoryId}");
    }

    public function achievementIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/achievement/index');
    }

    public function achievement(string $region, int $achievementId): ResponseInterface
    {
        return $this->get($region, "/data/wow/achievement/{$achievementId}");
    }

    public function achievementMedia(string $region, int $achievementId): ResponseInterface
    {
        return $this->get($region, "/data/wow/media/achievement/{$achievementId}");
    }
}
