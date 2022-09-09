<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class MediaSearchApi extends AbstractApi
{
    use StaticApiTrait;

    public function search(string $region, ?string $tags = null, string $orderBy = 'id', int $page = 1): ResponseInterface
    {
        return $this->get($region, '/data/wow/search/media', [
            'query' => [
                'tags' => $tags,
                'orderby' => $orderBy,
                '_page' => $page,
            ],
        ]);
    }
}
