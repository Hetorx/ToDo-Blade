@extends('layouts.app')

@section('title', 'Completed Tasks')

@section('content')

    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            margin-bottom: 20px;
        }

        .completed-tasks {
            width: 100%;
            max-width: 600px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .completed-tasks ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .completed-tasks li {
            margin-bottom: 10px;
        }

        .btn-container {
            margin-top: 20px;
        }

        .btn-container button {
            width: 200px;
        }
    </style>

    <div class="container">
        <h1>Completed Tasks</h1>

        <div class="completed-tasks">
            @if ($completedTasks->isEmpty())
                <p>No completed tasks.</p>
            @else
                <ul>
                    @foreach ($completedTasks as $task)
                        <li>
                            {{ $task->id }}.
                            {{ $task->title }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div class="btn-container">
            <form action="/tasks" method="get">
                <button class="btn btn-primary">Go back to main page</button>
            </form>
        </div>
    </div>

@endsection
