@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
    <h1>Edit Task</h1>
    <hr />
    <div class="row">
        <div class="col-md-8">
            <form method="POST" action="/tasks/{{ $task->id }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ $task->title }}">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" name="content" id="content" placeholder="content">{{ $task->content }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
@endsection
<hr />
<a href="/tasks" class="btn btn-default">View All Tasks</a>
<a href="/tasks/{{ $task->id }}" class="btn btn-default">Edit Task</a>
<a href="/tasks/delete/{{ $task->id }}" class="btn btn-danger">Delete Task</a>
<a href="/tasks/{{ $task->id }}/edit" class="btn btn-warning">Edit Task</a>
<a href="/tasks/{{ $task->id }}/delete" class="btn btn-info">Delete Task</a>
</div>
