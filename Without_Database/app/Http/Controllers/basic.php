<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class basic extends Controller
{
    function index(){
        return[
            'name'=>"Sanduni Senanayake",
            "email"=>"srsmsone@gmail.com"
        ];
    }
}
