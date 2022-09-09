<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle\BlizzardApi;

trait ProfileApiTrait
{
    protected function getNamespacePrefix(): string
    {
        return 'profile';
    }
}
