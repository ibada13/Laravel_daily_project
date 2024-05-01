<?php

namespace App\Http\Controllers;

use App\Models\Meadvices;
use Illuminate\Http\Request;
use App\Models\Rules;
use App\Models\objectives;
use Illuminate\Support\Facades\Redirect;

class AnnihilationController extends Controller
{
    public function Rule(Rules $rule){
        $rule->delete() ;
            return Redirect::back();
    }


    
    public function Objective(Objectives $Objective){
        $Objective->delete() ;
            return Redirect::back();
    }



    public function Meadvice(Meadvices $meadvice){
        $meadvice->delete() ;
            return Redirect::back();
    }
}
