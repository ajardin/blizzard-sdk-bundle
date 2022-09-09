<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\DynamicApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

class AuctionHouseApi extends AbstractApi
{
    use DynamicApiTrait;

    public function auctions(string $region, int $connectedRealmId): ResponseInterface
    {
        return $this->get($region, "/data/wow/connected-realm/{$connectedRealmId}/auctions");
    }
}
