<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class PlayableClassApi extends AbstractApi
{
    use StaticApiTrait;

    public function playableClassIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/playable-class/index');
    }

    public function playableClass(string $region, int $classId): ResponseInterface
    {
        return $this->get($region, "/data/wow/playable-class/{$classId}");
    }

    public function playableClassMedia(string $region, int $classId): ResponseInterface
    {
        return $this->get($region, "/data/wow/media/playable-class/{$classId}");
    }

    public function pvpTalentSlots(string $region, int $classId): ResponseInterface
    {
        return $this->get($region, "/data/wow/playable-class/{$classId}/pvp-talent-slots");
    }
}
