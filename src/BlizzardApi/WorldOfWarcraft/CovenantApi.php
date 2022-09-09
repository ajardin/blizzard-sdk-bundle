<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class CovenantApi extends AbstractApi
{
    use StaticApiTrait;

    public function covenantIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/covenant/index');
    }

    public function covenant(string $region, int $covenantId): ResponseInterface
    {
        return $this->get($region, "/data/wow/covenant/{$covenantId}");
    }

    public function covenantMedia(string $region, int $covenantId): ResponseInterface
    {
        return $this->get($region, "/data/wow/media/covenant/{$covenantId}");
    }

    public function soulbindIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/covenant/soulbind/index');
    }

    public function soulbind(string $region, int $soulbindId): ResponseInterface
    {
        return $this->get($region, "/data/wow/covenant/soulbind/{$soulbindId}");
    }

    public function conduitIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/covenant/conduit/index');
    }

    public function conduit(string $region, int $conduitId): ResponseInterface
    {
        return $this->get($region, "/data/wow/covenant/conduit/{$conduitId}");
    }
}
