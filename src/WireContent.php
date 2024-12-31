<?php

declare(strict_types=1);

namespace WireContent;

final class WireContent
{
    private static function getFacadeAccessor(): string
    {
        return 'wire-content';
    }
}
