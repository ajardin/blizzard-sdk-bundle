<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class PetApi extends AbstractApi
{
    use StaticApiTrait;

    public function petsIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/pet/index');
    }

    public function pet(string $region, int $petId): ResponseInterface
    {
        return $this->get($region, "/data/wow/pet/{$petId}");
    }

    public function petMedia(string $region, int $petId): ResponseInterface
    {
        return $this->get($region, "/data/wow/media/pet/{$petId}");
    }

    public function petAbilitiesIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/pet-ability/index');
    }

    public function petAbility(string $region, int $petAbilityId): ResponseInterface
    {
        return $this->get($region, "/data/wow/pet-ability/{$petAbilityId}");
    }

    public function petAbilityMedia(string $region, int $petAbilityId): ResponseInterface
    {
        return $this->get($region, "/data/wow/media/pet-ability/{$petAbilityId}");
    }
}
