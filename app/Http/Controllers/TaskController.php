<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'project_id' => 'required|exists:projects,id'
        ]);

        return response()->json(Task::create($data), 201);

    }
}
