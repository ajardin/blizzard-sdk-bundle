<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([__DIR__.'/src', __DIR__.'/tests']);
    $rectorConfig->phpstanConfig(__DIR__.'/phpstan.neon');

    $rectorConfig->import(SetList::CODE_QUALITY);
    $rectorConfig->import(SetList::DEAD_CODE);
    $rectorConfig->import(LevelSetList::UP_TO_PHP_80);
    $rectorConfig->import(SetList::TYPE_DECLARATION);
};
