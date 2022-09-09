<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class PlayableSpecializationApi extends AbstractApi
{
    use StaticApiTrait;

    public function playableSpecializationIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/playable-specialization/index');
    }

    public function playableSpecialization(string $region, int $specializationId): ResponseInterface
    {
        return $this->get($region, "/data/wow/playable-specialization/{$specializationId}");
    }

    public function playableSpecializationMedia(string $region, int $specializationId): ResponseInterface
    {
        return $this->get($region, "/data/wow/media/playable-specialization/{$specializationId}");
    }
}
