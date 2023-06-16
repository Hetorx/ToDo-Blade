@extends('layouts.app')

@section('title', 'Completed Tasks')

@section('content')
    <h1>Completed Tasks</h1>

    @if ($completedTasks->isEmpty())
        <p>No completed tasks.</p>
    @else
        <ul>
            @foreach ($completedTasks as $task)
                <li>{{ $task->title }}</li>
            @endforeach
        </ul>
    @endif
@endsection


<form action="/tasks" method="get">
    <button class="btn btn-primary">Go back to main page</button>
</form>