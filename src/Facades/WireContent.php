<?php

declare(strict_types=1);

namespace WireContent\Facades;

use Illuminate\Support\Facades\Facade;
use WireContent\WireContentServiceProvider;

/**
 * @see \VendorName\Skeleton\WireContent
 */
final class WireContent extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return WireContentServiceProvider::class;
    }
}
