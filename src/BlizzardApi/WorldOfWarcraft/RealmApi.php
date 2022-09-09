<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\DynamicApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class RealmApi extends AbstractApi
{
    use DynamicApiTrait;

    public function realmIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/realm/index');
    }

    public function realm(string $region, string $realmSlug): ResponseInterface
    {
        return $this->get($region, "/data/wow/realm/{$realmSlug}");
    }

    public function search(string $region, string $timezone = null, string $orderBy = 'id', int $page = 1): ResponseInterface
    {
        return $this->get($region, '/data/wow/search/realm', [
            'query' => [
                'timezone' => $timezone,
                'orderby' => $orderBy,
                '_page' => $page,
            ],
        ]);
    }
}
