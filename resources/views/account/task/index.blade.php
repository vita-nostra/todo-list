@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Создать новую задачу</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <form action="{{route('account.task.store')}}" method="POST">
                                @csrf
                                <label for="exampleFormControlTextarea1" class="form-label">Описание задачи</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
                                <button type="submit" class="btn btn-primary mt-3">Добавить</button>
                            </form>
                        </div>
                    </div>

                </div>
                </div>
            </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Список задач</div>
                    <div class="card-body">
                    @foreach($tasks as $task)
                        <div class="alert alert-info mb-2 d-flex justify-content-between align-items-center" role="alert">
                            {{ Str::limit($task->content, 250) }}
                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <a href="{{ route('account.task.show', $task->id) }}" class="btn btn-outline-primary">Просмотр</a>
                                <a href="{{ route('account.task.edit', $task->id) }}" class="btn btn-outline-primary">Редактировать</a>
                                <form action="{{route('account.task.delete', $task->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-primary">Удалить</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
