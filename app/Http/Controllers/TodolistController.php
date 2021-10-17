<?php

namespace App\Http\Controllers;

use App\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class TodolistController extends Controller
{
    public function list()
    {
        $optionssta = collect(["'in progress'", "'awaiting'","'new'","'abort'"]);
        $tasks = \App\Models\Dolist::all();
        $optionscat = \App\Models\Categorie::all();
        return view('todolist', [
            'tasks' => $tasks, 'optionssta' => $optionssta, 'optionscat' => $optionscat]
        );
    }

    public function newtask()
    {
         try {
            $task = new \App\Models\Dolist;
            $task->name = request('name');
            $task->description = request('description');
            $task->status = request('status');
            $task->categorie = request('categorie');
            $task->save();
        } catch(\Illuminate\Database\QueryException $ex){
            dd($ex->getMessage());
            return redirect('/todolist'); 
        }
        sleep(2);
        return redirect('/todolist');
    }

    public function updatetask(Request $request,$id)
    {
        if($request->input('end') == 'on'){
            $end=1;
        }else{
            $end=0;
        }
        try{
            $taskup =\App\Models\Dolist::where('id',$id)
            ->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'status' => $request->input('status'),
                'progression' => $request->input('progression'),
                'categorie' => $request->input('categorie'),
                'end' => $end]
            );
        } catch(Illuminate\Database\QueryException $ex){
            dd($ex->getMessage());
            return redirect('/todolist'); 
        }
        sleep(2);
        return redirect('/todolist');
    }

    public function deletetask (Request $request,$id)
    {
        try{
            $taskdel =\App\Models\Dolist::where('id',$id)
            ->delete();
        } catch(Illuminate\Database\QueryException $ex){
            dd($ex->getMessage());
            return redirect('/todolist'); 
        }
        sleep(2);
        return redirect('/todolist');
    }

    public static function stringToColorCode($str) {
        
        $code = dechex(crc32('#'.$str));
        $code = substr($code, 0, 6);
        return $code;
    }
}