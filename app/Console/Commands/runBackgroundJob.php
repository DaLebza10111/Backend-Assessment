<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\BackgroundJobRunner;
use Exeception;

class runBackgroundJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'job:run {class} {method} {--params=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Runs background tasks';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Get the command-line arguments and options
        $classname = $this->argument('class');
        $method = $this->argument('method');
        $params = $this->option('params') ? json_decode($this->option('params'), true) : [];

        try {
            $runner = new BackgroundJobRunner();
            $runner->runJob($className, $method, $params);
            $this->info("Job {$className}::{$method} executed successfully.");
        } catch (Exception $e) {
            $this->error("Failed to execute job: {$e->getMessage()}");
        }

        return 0;
    }
}
