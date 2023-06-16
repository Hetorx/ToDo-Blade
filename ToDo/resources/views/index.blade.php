@extends('layouts.app')

@section('content')

<h1>Here are your tasks to do!</h1>
@if ($remainingTasks->isEmpty())
<p>No tasks remaining.</p>
@endif
<form action="{{ url('/done') }}" method="POST">

    @csrf
    
    @foreach ($remainingTasks as $task)
        <span>{{$task->id}}.</span>
        <a href="{{ route('tasks.edit', $task->id) }}">{{ $task->title }}</a>
        <input type="checkbox" name="completed[]" value="{{ $task->id }}"><br/>
    @endforeach

    <button type="submit" class="btn btn-primary">Update Status</button>
</form>

<form action="/create" method="get">
    <button class="btn btn-primary">Create a new task</button>
</form>

<form action="/done" method="get">
    <button class="btn btn-primary">Show done tasks</button>
</form>


@endsection
