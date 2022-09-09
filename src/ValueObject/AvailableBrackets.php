<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\ValueObject;

final class AvailableBrackets
{
    public const ARENA_2V2 = '2v2';
    public const ARENA_3V3 = '3v3';
    public const RATED_BATTLEGROUNDS = 'rbg';

    public const BRACKET_LIST = [
        'Arena 2v2' => self::ARENA_2V2,
        'Arena 3v3' => self::ARENA_3V3,
        'Rated Battlegrounds' => self::RATED_BATTLEGROUNDS,
    ];
}
