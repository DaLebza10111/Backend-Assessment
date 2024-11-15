<?php

namespace App\Services;

class ExampleJob
{
    public function execute($message)
    {
        echo "Executing job with message: ". $message;
    }
}
