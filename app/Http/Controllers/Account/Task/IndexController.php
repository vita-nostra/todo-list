<?php

namespace App\Http\Controllers\Account\Task;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tasks = auth()->user()->tasks;
        return view('account.task.index', compact('tasks'));
    }
}

