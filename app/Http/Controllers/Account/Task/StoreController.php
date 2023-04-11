<?php

namespace App\Http\Controllers\Account\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\Task\StoreRequest;
use App\Models\Task;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        Task::firstOrCreate($data);

        return redirect()->route('account.task.index');
    }
}

