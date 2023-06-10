<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {

        $tasks = Task::all();

        return view('index', compact('tasks'));
    }

    public function show($id) {

        $task = Task::findOrFail($id);

        return view('show', compact('task'));
    }

    public function create() {

        return view('create');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'content' => 'required',
        ]);

        Task::create($validatedData);

        return redirect('/tasks');

    }

    public function done() {
        $done = Task::all();
        return view ('done', compact('done'));
    }
}