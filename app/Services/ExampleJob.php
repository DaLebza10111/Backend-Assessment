<?php

namespace App\Services;

class ExampleJob
{
    public function execute($message = "This is a test job")
    {
        echo "Executing job with message: ". $message;
    }
}
