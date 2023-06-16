@extends('layouts.app')
<style>
    .container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 0 20px;
        background: #fff;
        border-radius: 4px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.23);
        border: 1px solid #e6e6e6;
    }
</style>
@section ('title', $task->title)
@section ('content')
<div class="container">
    <h1>{{$task->title}}</h1>
    <p> {{$task->content}} </p>
</div>

@endsection