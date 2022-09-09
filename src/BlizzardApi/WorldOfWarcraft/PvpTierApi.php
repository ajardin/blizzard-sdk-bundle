<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class PvpTierApi extends AbstractApi
{
    use StaticApiTrait;

    public function pvpTierIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/pvp-tier/index');
    }

    public function pvpTier(string $region, int $pvpTierId): ResponseInterface
    {
        return $this->get($region, "/data/wow/pvp-tier/{$pvpTierId}");
    }

    public function pvpTierMedia(string $region, int $pvpTierId): ResponseInterface
    {
        return $this->get($region, "/data/wow/media/pvp-tier/{$pvpTierId}?namespace=static-%s");
    }
}
