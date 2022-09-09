<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi;

trait StaticApiTrait
{
    protected function getNamespacePrefix(): string
    {
        return 'static';
    }
}
