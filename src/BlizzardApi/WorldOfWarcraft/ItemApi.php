<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class ItemApi extends AbstractApi
{
    use StaticApiTrait;

    public function itemClassesIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/item-class/index');
    }

    public function itemClass(string $region, int $itemClassId): ResponseInterface
    {
        return $this->get($region, "/data/wow/item-class/{$itemClassId}");
    }

    public function itemSetsIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/item-set/index');
    }

    public function itemSet(string $region, int $itemSetId): ResponseInterface
    {
        return $this->get($region, "/data/wow/item-set/{$itemSetId}");
    }

    public function itemSubclass(string $region, int $itemClassId, int $itemSubclassId): ResponseInterface
    {
        return $this->get($region, "/data/wow/item-class/{$itemClassId}/item-subclass/{$itemSubclassId}");
    }

    public function item(string $region, int $itemId): ResponseInterface
    {
        return $this->get($region, "/data/wow/item/{$itemId}");
    }

    public function itemMedia(string $region, int $itemId): ResponseInterface
    {
        return $this->get($region, "/data/wow/media/item/{$itemId}");
    }

    public function itemSearch(string $region, ?string $name = null, string $orderBy = 'id', int $page = 1): ResponseInterface
    {
        return $this->get($region, '/data/wow/search/item', [
            'query' => [
                'name.en_US' => $name,
                'orderby' => $orderBy,
                '_page' => $page,
            ],
        ]);
    }
}
