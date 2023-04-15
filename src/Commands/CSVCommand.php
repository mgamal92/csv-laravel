<?php

namespace MG\CSV\Commands;

use Illuminate\Console\Command;

class CSVCommand extends Command
{
    public $signature = 'csv-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
