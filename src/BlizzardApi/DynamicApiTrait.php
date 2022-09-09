<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi;

trait DynamicApiTrait
{
    protected function getNamespacePrefix(): string
    {
        return 'dynamic';
    }
}
