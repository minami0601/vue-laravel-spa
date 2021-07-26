<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    function index()
    {
        return Task::all();
    }

    public function show(Task $task)
    {
        return $task;
    }
}
