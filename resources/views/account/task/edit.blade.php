@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Редактирование задачи</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <form action="{{ route('account.task.update', $task->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <label for="exampleFormControlTextarea1" class="form-label">Описание задачи</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content">{{ $task->content }}</textarea>
                                <button type="submit" class="btn btn-primary mt-3">Обновить</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
