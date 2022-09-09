<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class ReputationApi extends AbstractApi
{
    use StaticApiTrait;

    public function reputationFactionsIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/reputation-faction/index');
    }

    public function reputationFaction(string $region, int $reputationFactionId): ResponseInterface
    {
        return $this->get($region, "/data/wow/reputation-faction/{$reputationFactionId}");
    }

    public function reputationTiersIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/reputation-tiers/index');
    }

    public function reputationTiers(string $region, int $reputationTiersId): ResponseInterface
    {
        return $this->get($region, "/data/wow/reputation-tiers/{$reputationTiersId}");
    }
}
