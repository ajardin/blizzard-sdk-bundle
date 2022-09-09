<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\DynamicApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class RegionApi extends AbstractApi
{
    use DynamicApiTrait;

    public function regionsIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/region/index');
    }

    public function region(string $region, int $regionId): ResponseInterface
    {
        return $this->get($region, "/data/wow/region/{$regionId}");
    }
}
