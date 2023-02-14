<?php

namespace Deinte\LaravelFactuurSturenApi\Commands;

use Illuminate\Console\Command;

class LaravelFactuurSturenApiCommand extends Command
{
    public $signature = 'laravel-factuursturen-api';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
