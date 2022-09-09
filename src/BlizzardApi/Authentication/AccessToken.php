<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi\Authentication;

use DateInterval;
use DateTimeImmutable;

final class AccessToken
{
    private string $value;
    private DateTimeImmutable $expiresAt;

    /**
     * @param array<string, int|string> $data
     */
    public function __construct(array $data)
    {
        $this->value = (string) $data['access_token'];
        $this->expiresAt = (new DateTimeImmutable())->add(new DateInterval("PT{$data['expires_in']}S"));
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function isExpired(): bool
    {
        return $this->expiresAt <= new DateTimeImmutable();
    }
}
