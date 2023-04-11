<?php

namespace App\Http\Controllers\Account\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\Task\UpdateRequest;
use App\Models\Task;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Task $task)
    {
        $this->authorize('destroy', $task);

        $data = $request->validated();
        $task->update($data);

        return redirect()->route('account.task.show', $task->id);
    }
}

