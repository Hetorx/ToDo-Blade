@extends('layouts.app')

@section('content')
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            max-width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        textarea.form-control {
            height: 150px;
        }

        .btn {
            width: 100%;
            max-width: 300px;
            border: none;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 10px;
        }

        .btn-back {
            margin-top: 20px;
        }
    </style>

    <div class="container">
        <h1>Create a new task!</h1>

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
                <button class="btn btn-primary">Add a new task</button>
            </div>
        </form>

        <form action="/tasks" method="get">
            <button class="btn btn-primary btn-back">Go back to see all tasks</button>
        </form>
    </div>
@endsection
