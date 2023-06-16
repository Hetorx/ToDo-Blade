@extends('layouts.app')

@section('content')
    <style>
        .task-container {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .task-id {
            font-weight: bold;
            margin-right: 10px;
        }

        .task-title {
            text-decoration: none;
            color: #333;
        }

        .task-checkbox {
            margin-left: 20px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .btn-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }

        .btn-container .btn {
            width: 100%;
            max-width: 300px;
            border: none;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 10px;
        }
    </style>

    <div class="container">
        <h1>Here are your tasks to do!</h1>

        @if ($remainingTasks->isEmpty())
            <p>No tasks remaining.</p>
        @endif

        <form action="{{ url('/done') }}" method="POST">
            @csrf
            @foreach ($remainingTasks as $task)
                <div class="task-container">
                    <span class="task-id">{{ $task->id }}.</span>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="task-title">{{ $task->title }}</a>
                    <input type="checkbox" name="completed[]" value="{{ $task->id }}" class="task-checkbox">
                </div>
            @endforeach

            <div class="btn-container">
                <button type="submit" class="btn btn-primary">Update Status</button>
            </div>
        </form>

        <div class="btn-container">
            <form action="/create" method="get">
                <button class="btn btn-primary">Create a new task</button>
            </form>

            <form action="/done" method="get">
                <button class="btn btn-primary">Show done tasks</button>
            </form>
        </div>
    </div>
@endsection
