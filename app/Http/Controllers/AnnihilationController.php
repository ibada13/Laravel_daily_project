<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Meadvices;
use App\Models\Rules;
use App\Models\objectives;
use App\Models\Toodo;
use App\Models\Extra;
use App\Models\GoodThings;
use App\Models\BadThings;
use App\Models\Achive;
use App\Models\Achives;
use App\Models\SubTopics;
use App\Models\Topics;
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
    public function Toodo(Extra $day , Toodo $toodo){
        $toodo->delete();
        return Redirect::back();

    }
    public function BadThing(Extra $day , BadThings $thing){
        $thing->delete();
        return Redirect::back();
    }
    public function GoodThing(Extra $day , GoodThings $thing){
        $thing->delete();
        return Redirect::back();
    }

    public function Achive(Extra $day , Achives $achive ){
        $achive->delete();
        return Redirect::back();
    }
    public function Extra(Request $req , Extra $day){
        $day->delete();
        return Redirect::back();
    } 
    public function SubTopics(Request $req , SubTopics $stop){
        $stop->delete();
        return redirect('/notes');

    }
    public function Topics(Request $req , Topics $top ){
        // dd($top);
        $top->delete();
        return redirect('/notes');
    }
}
