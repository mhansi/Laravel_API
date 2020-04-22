<?php

namespace App\Http\Controllers;
use App\User;
use Validator;

use Illuminate\Http\Request;

class basic extends Controller
{
    function index(){
          $data = User::all();
      
          return $data;
        
    }
   

    function insert(Request $request){
       
        $rules =[
           'ID' =>'required'

        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
           return response()->json($validator->errors(),400);
         }
        $user = new User();

        $user->ID = $request['ID'];
        $user->Name = $request['Name'];
        $user->City = $request['City'];
        $user->University =$request['University'];
    
        $user->save();

        return response()->json('record saved', 201);
    }
}
