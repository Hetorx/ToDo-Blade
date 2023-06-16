<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $remainingTasks = Task::where('is_completed', 0)->get();
    
        return view('index', compact('remainingTasks'));
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

    public function updateStatus(Request $request)
    {
        $completedTasks = $request->input('completed', []);

        foreach ($completedTasks as $taskId) {
            $task = Task::findOrFail($taskId);
            $task->is_completed = 1;
            $task->save();
        }

        $remainingTasks = Task::where('is_completed', 0)->get();
        return view('index', compact('remainingTasks'));
    }


    public function done(){

        $completedTasks = Task::where('is_completed', 1)->get();
        return view('done', compact('completedTasks'));
    
}

    public function edit($id) {

        $task = Task::findOrFail($id);
        return view('edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $task->title = $request->input('title');
        $task->content = $request->input('content');
        // Dodaj inne pola, które chcesz zaktualizować

        $task->save();

        return redirect('/tasks' . $task->slug);
    }

    

    
}