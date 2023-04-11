@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Просмотр задачи</div>
                    <div class="card-body">
                        <div class="alert alert-light" role="alert">
                            <p>{{ $task->content }}</p>
                            <hr>
                            <p class="mb-0 fs-6 fw-bold">Создана: {{ $task->created_at }}</p>
                        </div>
                        <p><a href="{{ route('account.task.index') }}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Вернуться к списку задач</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
