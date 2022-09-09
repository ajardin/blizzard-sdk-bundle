<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class PlayableRaceApi extends AbstractApi
{
    use StaticApiTrait;

    public function playableRaceIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/playable-race/index');
    }

    public function playableRace(string $region, int $raceId): ResponseInterface
    {
        return $this->get($region, "/data/wow/playable-race/{$raceId}");
    }
}
