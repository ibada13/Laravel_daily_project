<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Error extends Controller
{
    public function show( $msg = null){
        return response(
         view('devils.lucifer',[
            "errormsg"=>$msg
         ]),
        404);
    }
}
