@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')

    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .form-container {
            width: 100%;
            max-width: 600px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .btn-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .btn-container button,
        .btn-container a {
            width: 200px;
        }
    </style>

    <div class="container">
        <h1>Edit Task</h1>
        <hr />
        <div class="row">
            <div class="col-md-8">
                <div class="form-container">
                    <form method="POST" action="/tasks/{{ $task->id }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Title"
                                value="{{ $task->title }}">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" name="content" id="content" placeholder="Content">{{ $task->content }}</textarea>
                        </div>
                        <div class="form-group btn-container">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <div
                            style="display:flex; flex-direction:column; align-items:center; justify-content:center; margin-top:10px">
                            <a href="/tasks" class="btn btn-default">View All Tasks</a>
                            <form action="/tasks/{{ $task->id }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">Delete Task</button>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
