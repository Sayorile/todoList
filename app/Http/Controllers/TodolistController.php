<?php

namespace App\Http\Controllers;

use App\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class TodolistController extends Controller
{
    public function list()
    {
        $options = collect(["'in progress'", "'awaiting'","'new'","'abort'"]);
        $tasks = \App\Models\Dolist::all();
        $idt= $tasks;
        return view('todolist', [
            'tasks' => $tasks, 'options' => $options, 'idt' => $idt
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
            return redirect('/todolist'); 
        }

        return redirect('/todolist');
    }

    public function updatetask(Request $request,$id)
    {
        if($request->input('end') == 'on'){
            $end=1;
        }else{
            $end=0;
        }

        $taskup =\App\Models\Dolist::where('id',$id)
            ->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'status' => $request->input('status'),
                'progression' => $request->input('progression'),
                'end' => $end]
                );
        sleep(5);
        return redirect('/todolist');
    }
}