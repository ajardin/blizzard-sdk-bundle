<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\DynamicApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class WowTokenApi extends AbstractApi
{
    use DynamicApiTrait;

    public function index(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/token/index');
    }
}
