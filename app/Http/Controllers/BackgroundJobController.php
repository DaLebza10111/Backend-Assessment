<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackgroundJobController extends Controller
{
    //
    public function index(){

        $jobs = [['id'=> 1, 'class' => 'Examplejob', 'method'=> 'execute', 'status'=>'running', 'retries'=>0],
                ['id'=> 2, 'class' => 'Examplejob', 'method'=> 'execute', 'status'=>'failed', 'retries'=>2]
    ];

        return view('jobs.index', compact('jobs'));

    }

    public function cancel($id){
        Log::info("Job with Id {$id} has been cancelled.");

        return redirect()->route('jobs.index')->with('success', "job {$id} canceled.");
    }
}
