<?php

use App\Services\BackgroundJobRunner;

function runBackgroundJob($className, $method, $params = [], $retry = 3){
    $runner = new runBackgroundJob();
    $runner->runJob($className, $method, $params);
}
