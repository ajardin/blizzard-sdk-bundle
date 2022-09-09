<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\Tests\BlizzardApi;

use Ajardin\BlizzardSdkBundle\BlizzardApi\Authentication\AccessToken;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @group unit
 * @covers \Ajardin\BlizzardSdkBundle\BlizzardApi\Authentication\AccessToken
 */
final class AccessTokenTest extends TestCase
{
    public function testItDetectsFreshAccessToken(): void
    {
        $accessToken = new AccessToken([
            'access_token' => 'qwertyuiop',
            'expires_in' => 60,
        ]);

        static::assertSame('qwertyuiop', $accessToken->getValue());
        static::assertFalse($accessToken->isExpired());
    }

    public function testItDetectsExpiredAccessToken(): void
    {
        $accessToken = new AccessToken([
            'access_token' => 'qwertyuiop',
            'expires_in' => 0,
        ]);

        static::assertSame('qwertyuiop', $accessToken->getValue());
        static::assertTrue($accessToken->isExpired());
    }
}
