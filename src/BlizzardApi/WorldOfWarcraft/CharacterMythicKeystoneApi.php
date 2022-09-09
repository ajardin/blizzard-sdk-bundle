<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\ProfileApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class CharacterMythicKeystoneApi extends AbstractApi
{
    use ProfileApiTrait;

    public function index(string $region, string $realmSlug, string $characterName): ResponseInterface
    {
        return $this->get($region, "/profile/wow/character/{$realmSlug}/{$characterName}/mythic-keystone-profile");
    }

    public function details(string $region, string $realmSlug, string $characterName, int $seasonId): ResponseInterface
    {
        return $this->get($region, "/profile/wow/character/{$realmSlug}/{$characterName}/mythic-keystone-profile/season/{$seasonId}");
    }
}
