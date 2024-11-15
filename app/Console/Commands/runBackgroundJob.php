<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\BackgroundJobRunner;

class runBackgroundJob extends Command
{

    protected $signature = 'job:run {class} {method} {--params=}';
    protected $description = 'Runs background tasks';

    public function handle()
    {
        $classname = $this->argument('class');
    }
}
