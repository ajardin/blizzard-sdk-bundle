<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class GuildCrestApi extends AbstractApi
{
    use StaticApiTrait;

    public function componentIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/guild-crest/index');
    }

    public function borderMedia(string $region, int $borderId): ResponseInterface
    {
        return $this->get($region, "/data/wow/media/guild-crest/border/{$borderId}");
    }

    public function emblemMedia(string $region, int $emblemId): ResponseInterface
    {
        return $this->get($region, "/data/wow/media/guild-crest/emblem/{$emblemId}");
    }
}
