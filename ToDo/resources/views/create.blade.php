@extends('layouts.app')

@section ('title','Create a new task!')

@section ('content')
@csrf
<form action='/task' method="POST">
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
<form action="/" method="POST">
    <button class="btn btn-primary" action='/' method="get"> Go back to main page</button>
</form>
@endsection