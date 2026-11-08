<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    // Display only today's tasks
    public function welcome()
    {
        $tasks = Task::whereDate('task_date', today())
            ->get();

        return view('welcome', compact('tasks'));
    }

    // Display all tasks ordered by date
    public function index()
    {
        $tasks = Task::orderBy('task_date', 'asc')
            ->get();

        return view('tasks.index', compact('tasks'));
    }
}
