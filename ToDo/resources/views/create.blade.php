@extends('layouts.app')

@section ('title','Create a new task!')

@section ('content')
<style>
    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    textarea {
        height: 150px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .btn-primary:focus {
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
    }

    .btn-back {
        background-color: #6c757d;
        border-color: #6c757d;
        margin-top: 20px;
    }

    .btn-back:hover {
        background-color: #5a6268;
        border-color: #545b62;
    }

    .btn-back:focus {
        box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
    }
</style>

<form action="{{ url('/tasks') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="">Title</label>
        <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
        <label for="">Category</label>
        <input type="text" class="form-control" name="category">
    </div>    
    <div class="form-group">
        <label for="">Content</label>
        <textarea name="content" class="form-control"></textarea>
    </div>
    <div class="d-flex justify-content-between">
        <button class="btn btn-primary"> Add a new task </button>
        <form action="/tasks" method="get">
            <button class="btn btn-back" action='/tasks' method="get"> Go back to see all tasks</button>
        </form>
    </div>
</form>

@endsection
