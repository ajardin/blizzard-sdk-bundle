<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi;

use Ajardin\BlizzardSdkBundle\BlizzardApi\Authentication\Credentials;
use Ajardin\BlizzardSdkBundle\HttpClient\BlizzardHttpClient;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\HttpClient\ResponseInterface;

abstract class ApiTestCase extends TestCase
{
    protected const DEFAULT_REGION = 'eu';

    protected function createBlizzardHttpClient(): BlizzardHttpClient
    {
        return new BlizzardHttpClient(
            HttpClient::create(),
            new Credentials($this->getClientId(), $this->getSecretId()),
        );
    }

    protected function getClientId(): string
    {
        $clientId = getenv('BLIZZARD_CLIENT_ID');

        if (!\is_string($clientId)) {
            throw new \RuntimeException('BLIZZARD_CLIENT_ID is not set');
        }

        return $clientId;
    }

    protected function getSecretId(): string
    {
        $clientSecret = getenv('BLIZZARD_CLIENT_SECRET');

        if (!\is_string($clientSecret)) {
            throw new \RuntimeException('BLIZZARD_CLIENT_SECRET is not set');
        }

        return $clientSecret;
    }

    protected function assertRequestIsSuccessful(ResponseInterface $response): void
    {
        static::assertSame(Response::HTTP_OK, $response->getStatusCode());

        $content = $response->toArray();
        static::assertArrayHasKey('_links', $content);
    }

    protected function assertSearchIsSuccessful(ResponseInterface $response): void
    {
        static::assertSame(Response::HTTP_OK, $response->getStatusCode());

        $content = $response->toArray();
        static::assertArrayHasKey('results', $content);
    }
}
