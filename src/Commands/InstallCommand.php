<?php

declare(strict_types=1);

namespace WireContent\Commands;

use Illuminate\Console\Command;

final class InstallCommand extends Command
{
    public $signature = 'skeleton';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
