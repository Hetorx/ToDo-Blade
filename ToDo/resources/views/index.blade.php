@extends('layouts.app')

@section ('content')

<h1>Here are you'r tasks!</h1>

    @foreach ($tasks as $task)
        {{$task->id}}
        {{$task->title}} <br>
    @endforeach

@endsection


<form action="/create" method="get">
    <button class="btn btn-primary"> Create new task</button>
</form>
