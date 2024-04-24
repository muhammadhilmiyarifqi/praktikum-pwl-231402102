<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Models;

class TodoTaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('home', [
            'tasks' => $tasks,
        ]);
    }

    public function tambah(Request $request)
    {
        $request->validate([
            'task' => 'required|min:5',
        ],
        [
            'task.required' => 'isi cok tugasnya',
            'task.min' => '5 huruf bray jgn kurang',
        ]
    );

        Task::create([
            'task' => $request->task,
            'tanggal' => NOW(),
        ]);

        return redirect('/');
    }

    public function hapus(Request $request)
    {
        Task::where('id', $request->id)->delete();
        return redirect('/')->with('success');
    }
}
