<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\HttpClient;

use Ajardin\BlizzardSdkBundle\BlizzardApi\Authentication\AccessToken;
use Ajardin\BlizzardSdkBundle\BlizzardApi\Authentication\Credentials;
use RuntimeException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\HttpClient\Exception\ExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class BlizzardHttpClient
{
    private const AUTHENTICATION_URL = 'https://us.battle.net/oauth/token';

    private ?AccessToken $accessToken = null;

    public function __construct(
        private HttpClientInterface $client,
        private Credentials $credentials,
    ) {
    }

    /**
     * @param array<string, mixed> $options
     */
    public function request(string $method, string $url, array $options = []): ResponseInterface
    {
        if ($this->accessToken === null || $this->accessToken->isExpired()) {
            $this->refreshAccessToken();
        }

        $options['headers'] = ['Authorization' => 'Bearer '.$this->accessToken?->getValue()];

        return $this->client->request($method, $url, $options);
    }

    private function refreshAccessToken(): void
    {
        $response = $this->client->request(
            Request::METHOD_POST,
            self::AUTHENTICATION_URL,
            [
                'query' => ['grant_type' => 'client_credentials'],
                'headers' => [
                    'Authorization' => $this->getAuthorizationHeaderValue(),
                ],
            ]
        );

        try {
            $this->accessToken = new AccessToken($response->toArray());
        } catch (ExceptionInterface $exception) {
            throw new RuntimeException(sprintf('Failed to refresh access token: %s.', $exception->getMessage()), $exception->getCode(), $exception);
        }
    }

    private function getAuthorizationHeaderValue(): string
    {
        return 'Basic '.base64_encode($this->credentials->getClientId().':'.$this->credentials->getClientSecret());
    }
}
