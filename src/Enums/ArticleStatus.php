<?php

declare(strict_types=1);

namespace WireContent\Enums;

use Illuminate\Support\Str;

enum ArticleStatus: string
{
    case DRAFT = 'Draft';
    case PUBLISHED = 'Published';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function options(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn ($case) => [$case->value => Str::title($case->name)])
            ->all();
    }
}
