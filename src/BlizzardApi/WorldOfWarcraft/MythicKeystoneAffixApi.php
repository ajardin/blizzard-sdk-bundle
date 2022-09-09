<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class MythicKeystoneAffixApi extends AbstractApi
{
    use StaticApiTrait;

    public function affixesIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/keystone-affix/index');
    }

    public function affix(string $region, int $keystoneAffixId): ResponseInterface
    {
        return $this->get($region, "/data/wow/keystone-affix/{$keystoneAffixId}");
    }

    public function affixMedia(string $region, int $keystoneAffixId): ResponseInterface
    {
        return $this->get($region, "/data/wow/media/keystone-affix/{$keystoneAffixId}");
    }
}
