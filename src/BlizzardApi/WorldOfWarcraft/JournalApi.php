<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft;

use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\StaticApiTrait;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class JournalApi extends AbstractApi
{
    use StaticApiTrait;

    public function journalExpansionsIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/journal-expansion/index');
    }

    public function journalExpansion(string $region, int $journalExpansionId): ResponseInterface
    {
        return $this->get($region, "/data/wow/journal-expansion/{$journalExpansionId}");
    }

    public function journalEncountersIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/journal-encounter/index');
    }

    public function journalEncounter(string $region, int $journalEncounterId): ResponseInterface
    {
        return $this->get($region, "/data/wow/journal-encounter/{$journalEncounterId}");
    }

    public function searchJournalEncounter(string $region, ?string $instanceName = null, string $orderBy = 'id', int $page = 1): ResponseInterface
    {
        return $this->get($region, '/data/wow/search/journal-encounter', [
            'query' => [
                'name.en_US' => $instanceName,
                'orderby' => $orderBy,
                '_page' => $page,
            ],
        ]);
    }

    public function journalInstancesIndex(string $region): ResponseInterface
    {
        return $this->get($region, '/data/wow/journal-instance/index');
    }

    public function journalInstance(string $region, int $journalInstanceId): ResponseInterface
    {
        return $this->get($region, "/data/wow/journal-instance/{$journalInstanceId}");
    }

    public function journalInstanceMedia(string $region, int $journalInstanceId): ResponseInterface
    {
        return $this->get($region, "/data/wow/media/journal-instance/{$journalInstanceId}");
    }
}
