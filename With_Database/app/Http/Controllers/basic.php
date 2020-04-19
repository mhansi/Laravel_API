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
}
