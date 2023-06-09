@extends('layouts.app')

@section ('title','Create a new task!')

@section ('content')
@csrf
<form action='/store' method="POST">
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
        <label for="">Category</label>
        <input type="text" class="form-control" name="category">
    </div>    
    <div class="form-group">
        <label for="">Title</label>
        <textarea name="content" class="form-control"></textarea>
    </div>
    <button class="btn btn-primary"> Add a new task </button>
</form>

@endsection

<form action="/task" method="get">
    <button class="btn btn-primary" action='/task' method="get"> Go back to see all tasks</button>
</form>
