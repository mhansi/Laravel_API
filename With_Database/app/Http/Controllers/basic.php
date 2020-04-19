<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class basic extends Controller
{
    function index(){
          $data = User::all();
      
          return $data;
        
    }

    function insert(Request $request){
        $user = new User();

        $user->ID = $request['ID'];
        $user->Name = $request['Name'];
        $user->City = $request['City'];
        $user->University =$request['University'];
    
        $user->save();

        return "saved";
    }
}
