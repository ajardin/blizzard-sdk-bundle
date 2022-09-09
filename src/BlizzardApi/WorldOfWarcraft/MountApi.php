<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class MountApi extends AbstractApi
{
    use StaticApiTrait;

    public function mountsIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/mount/index');
    }

    public function mount(string $region, int $mountId): ResponseInterface
    {
        return $this->get($region, "/data/wow/mount/{$mountId}");
    }

    public function search(string $region, ?string $name = null, string $orderBy = 'id', int $page = 1): ResponseInterface
    {
        return $this->get($region, '/data/wow/search/mount', [
            'query' => [
                'name.en_US' => $name,
                'orderby' => $orderBy,
                '_page' => $page,
            ],
        ]);
    }
}
