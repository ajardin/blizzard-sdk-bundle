<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\ValueObject;

final class AvailableRegions
{
    public const NORTH_AMERICA = 'us';
    public const EUROPE = 'eu';
    public const KOREA = 'kr';
    public const TAIWAN = 'tw';

    public const REGION_LIST = [
        'Americas & Southeast Asia' => self::NORTH_AMERICA,
        'Europe' => self::EUROPE,
        'Korea' => self::KOREA,
        'Taiwan' => self::TAIWAN,
    ];
}
