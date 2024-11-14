<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Log;

class BackgroundJobRunner
{
    public function runJob($className, $method, $params = [])
    {
        try {
            if (!class_exists($className) || !method_exists($className, $method)) {
                throw new Exception("Invalid class or method.");
            }

            $instance = new $className();
            $result = call_user_func_array([$instance, $method], $params);

            Log::info("Job Success: {$className}::{$method}", ['status' => 'success']);
            return $result;
        } catch (Exception $e) {
            Log::error("Job Failure: {$className}::{$method}", ['error' => $e->getMessage()]);
            throw $e;
        }
    }
}
