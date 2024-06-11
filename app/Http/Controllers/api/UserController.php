<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function index(){
        $user = User::all();
        if($user->isNotEmpty()){
            return response()->json(['user'=>$user],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['user'=>'no user'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function store(Request $request){
        $user = User::create($request->all());
        if($user){
            return response()->json(['user'=>'Se ha insertado correctamente'],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['user'=>'No se ha podido insertar'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function create(Request $request){
        $user = User::create($request->all());
        if($user){
            return response()->json(['user'=>'Se ha insertado correctamente'],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['user'=>'No se ha podido insertar'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function show($id){
        $user = User::find($id);
        if($user){
            return response()->json(['user'=>$user],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['user'=>'no user finded'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function update(Request $request, $id){
        $user = User::find($id);
        if($user){
            $user->update($request->all());
            return response()->json(['user'=>$user],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['user'=>'no user'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function destroy($id){
        $user = User::find($id);
        if($user){
            $user->delete();
            return response()->json(['user'=>$user],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['user'=>'no user'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function edit($id){
        $user = User::find($id);
        if($user){
            return response()->json(['user'=>$user],200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json(['user'=>'no user'],404, [], JSON_UNESCAPED_UNICODE);
        }
    }
}
