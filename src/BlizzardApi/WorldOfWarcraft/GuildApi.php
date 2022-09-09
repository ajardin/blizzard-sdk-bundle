<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\ProfileApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class GuildApi extends AbstractApi
{
    use ProfileApiTrait;

    public function guild(string $region, string $realmSlug, string $nameSlug): ResponseInterface
    {
        return $this->get($region, "/data/wow/guild/{$realmSlug}/{$nameSlug}");
    }

    public function activity(string $region, string $realmSlug, string $nameSlug): ResponseInterface
    {
        return $this->get($region, "/data/wow/guild/{$realmSlug}/{$nameSlug}/activity");
    }

    public function achievements(string $region, string $realmSlug, string $nameSlug): ResponseInterface
    {
        return $this->get($region, "/data/wow/guild/{$realmSlug}/{$nameSlug}/achievements");
    }

    public function roster(string $region, string $realmSlug, string $nameSlug): ResponseInterface
    {
        return $this->get($region, "/data/wow/guild/{$realmSlug}/{$nameSlug}/roster");
    }
}
