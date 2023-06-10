@extends('layouts.app')

@section ('content')

<h1>Here are your tasks!</h1>

<form action="/tasks" method="post">
    @csrf

    @foreach ($tasks as $task)
        {{$task->id}}.
        {{$task->title}} 
        <input type="checkbox" name="task_ids[]" value="{{$task->id}}" {{ $task->is_completed ? 'checked' : '' }} /><br>
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
