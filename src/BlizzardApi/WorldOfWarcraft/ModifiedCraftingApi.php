<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class ModifiedCraftingApi extends AbstractApi
{
    use StaticApiTrait;

    public function modifiedCraftingIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/modified-crafting/index');
    }

    public function modifiedCraftingCategoryIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/modified-crafting/category/index');
    }

    public function modifiedCraftingCategory(string $region, int $categoryId): ResponseInterface
    {
        return $this->get($region, "/data/wow/modified-crafting/category/{$categoryId}");
    }

    public function modifiedCraftingReagentSlotTypeIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/modified-crafting/reagent-slot-type/index');
    }

    public function modifiedCraftingReagentSlotType(string $region, int $slotTypeId): ResponseInterface
    {
        return $this->get($region, "/data/wow/modified-crafting/reagent-slot-type/{$slotTypeId}");
    }
}
