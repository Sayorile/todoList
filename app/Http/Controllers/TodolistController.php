<?php

namespace App\Http\Controllers;

use App\Models;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    public function list()
    {
        $tasks = \App\Models\Dolist::all();

        return view('todolist', [
            'tasks' => $tasks,
        ]);
    }

    public function newtask()
    {
         try {
            $task = new \App\Models\Dolist;
            $task->name = request('name');
            $task->description = request('description');
            $task->status = request('status');

            $task->save();
        } catch(\Illuminate\Database\QueryException $ex){
            dd($ex->getMessage());
            return redirect('/todolist/Error'); 
        }

        return redirect('/todolist');
    }

    public function updatetask(Request $request, $id)
    {
        $task = \App\Models\Dolist::findOrFail($id);
        $task->name = request('name');
        $task->description = request('description');
        $task->status = request('status');
        $task->push();
         return view('todolist')->with([
            'dolist' => $task
        ]);
    }
}
