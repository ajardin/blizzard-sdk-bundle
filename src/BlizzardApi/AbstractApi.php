<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi;

use Ajardin\BlizzardSdkBundle\HttpClient\BlizzardHttpClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\HttpClient\ResponseInterface;

abstract class AbstractApi
{
    protected const API_ENDPOINT = 'https://{region}.api.blizzard.com';

    public function __construct(
        protected BlizzardHttpClient $blizzardHttpClient,
    ) {
    }

    /**
     * @param array<string, array<string, int|string|null>> $options
     */
    protected function get(string $region, string $path, array $options = []): ResponseInterface
    {
        return $this->blizzardHttpClient->request(
            Request::METHOD_GET,
            str_replace('{region}', $region, self::API_ENDPOINT).$path,
            array_merge_recursive(['query' => ['namespace' => $this->getNamespacePrefix().'-'.$region]], $options),
        );
    }

    abstract protected function getNamespacePrefix(): string;
}
