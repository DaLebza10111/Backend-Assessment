<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as Consolekernel;

class Kernel extends ConsoleKernel
{
    protected $command = [
        \App\Console\Commands\runBackgroundJob::class,
    ];

    protected function schedule(Schedule $schedule){
        //
    }

    protected function commands(){
        $this->load(__DIR__.'/Commands');

        require base_path('roues/console.php');
    }
}
