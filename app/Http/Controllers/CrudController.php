<?php

namespace App\Http\Controllers;
use App\Models\CRUD;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function home(){
        $tasks = CRUD::all();
        return view('welcome', compact('tasks'));
    }

    public function taskStore(Request $request){
        //dd($request->to_do);
        $addTask = new CRUD();
        $addTask->name = $request->name;
        $addTask->to_do = '1' ;
        $addTask->save() ;


    }
    public function inProgress(Request $request){
        $Inprogress = CRUD::where('id',$request->id)->first();
        $Inprogress->in_progress = '1';
        $Inprogress->save();
    }
    public function done(Request $request){
        $done = CRUD::where('id',$request->id)->first();
        $done->done = '1';
        $done->save();
    }
}
