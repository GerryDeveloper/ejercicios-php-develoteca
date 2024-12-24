<?php

namespace App\Http\Controllers;

use App\Models\task; // modelo ya incluido
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $task['tasks'] = Task::all();

        return view('task.index', $task);
        // return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $task = request()->all(); // todo lo que se envie en el formulario, aqui esta definido
        Task::create($task);
        
        // retornamos a donde sea que queramos (vistas por ejemplo)
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(task $task)
    public function destroy($id)
    {
        //
        // return redirect('/');
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect('/');
    }
}
