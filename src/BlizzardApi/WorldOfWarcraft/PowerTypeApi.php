<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class PowerTypeApi extends AbstractApi
{
    use StaticApiTrait;

    public function powerTypeIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/power-type/index');
    }

    public function powerType(string $region, int $powerTypeId): ResponseInterface
    {
        return $this->get($region, "/data/wow/power-type/{$powerTypeId}");
    }
}
