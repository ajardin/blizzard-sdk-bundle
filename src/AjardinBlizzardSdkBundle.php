<?php

declare(strict_types=1);

namespace Ajardin\BlizzardSdkBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AjardinBlizzardSdkBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
