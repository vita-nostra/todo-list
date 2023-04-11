<?php

namespace App\Http\Controllers\Account\Task;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('account.task.create');
    }
}
