<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class SpellApi extends AbstractApi
{
    use StaticApiTrait;

    public function spell(string $region, int $spellId): ResponseInterface
    {
        return $this->get($region, "/data/wow/spell/{$spellId}");
    }

    public function spellMedia(string $region, int $spellId): ResponseInterface
    {
        return $this->get($region, "/data/wow/media/spell/{$spellId}");
    }

    public function search(string $region, ?string $name = null, string $orderBy = 'id', int $page = 1): ResponseInterface
    {
        return $this->get($region, '/data/wow/search/spell', [
            'query' => [
                'name.en_US' => $name,
                'orderby' => $orderBy,
                '_page' => $page,
            ],
        ]);
    }
}
