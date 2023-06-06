@extends('layouts.app')

@section ('content')

    @foreach ($tasks as $task)
    {{$task->id}}
    {{$task->title}} <br>
    @endforeach
    
@endsection