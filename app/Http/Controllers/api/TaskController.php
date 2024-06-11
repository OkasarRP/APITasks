<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    function index(){
        $task = Task::all();
        if($task->isNotEmpty()){
            return response()->json(['task'=>$task],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['task'=>'no task'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function store(Request $request){
        $task = Task::create($request->all());
        if($task){
            return response()->json(['task'=>'Se ha insertado correctamente'],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['task'=>'No se ha podido insertar'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function create(Request $request){
        $task = Task::create($request->all());
        if($task){
            return response()->json(['task'=>'Se ha insertado correctamente'],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['task'=>'No se ha podido insertar'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function show($id){
        $task = Task::find($id);
        if($task){
            return response()->json(['task'=>$task],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['task'=>'no task finded'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function update(Request $request, $id){
        $task = Task::find($id);
        if($task){
            $task->update($request->all());
            return response()->json(['task'=>$task],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['task'=>'no task'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function destroy($id){
        $task = Task::find($id);
        if($task){
            $task->delete();
            return response()->json(['task'=>$task],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['task'=>'no task'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function edit($id){
        $task = Task::find($id);
        if($task){
            return response()->json(['task'=>$task],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['task'=>'no task'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
}
