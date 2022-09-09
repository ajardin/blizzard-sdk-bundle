<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class TitleApi extends AbstractApi
{
    use StaticApiTrait;

    public function titleIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/title/index');
    }

    public function title(string $region, int $titleId): ResponseInterface
    {
        return $this->get($region, "/data/wow/title/{$titleId}");
    }
}
