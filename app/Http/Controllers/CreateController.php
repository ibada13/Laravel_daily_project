<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Rules;
use App\Models\objectives;
use App\Models\Meadvices;
use App\Models\Extra;
use App\Models\Toodo;
use App\Models\GoodThings;
use App\Models\BadThings;
use App\Models\Achives ;
use Illuminate\Support\Facades\Redirect;

class CreateController extends Controller
{


    public function Rule(Request $req){
        $newelm = $req->validate([
            "content"=>"required",
        ]);
        Rules::create($newelm);
        return redirect('/');

    }
    public function Objective(Request $req){
        $newelm = $req->validate([
            "content"=>"required",
        ]);
        Objectives::create($newelm);
        return redirect('/objectives');

    }

    public function Meadvice(Request $req){
        $newelm = $req->validate([
            'content'=>'required',
        ]);
        Meadvices::create($newelm);
        return redirect('/meadvices');
    }

    public function Toodo(Request $req , Extra $day){
        $newelm = $req->validate([
            'content'=>"required" , 

        ]);
        $newelm['extra_id'] = $day->id ;
        Toodo::create($newelm);
        // dd($newelm);
        return redirect("/extra/{$day->id}/toodo");
    }  
    public function BadThing(Request $req , Extra $day){
        $newelm = $req->validate([
            'content'=>'required',
        ]);
        $newelm['extra_id'] = $day->id;
        
        BadThings::create($newelm);
        return redirect("/extra/{$day->id}/things");
    }
    public function GoodThing(Request $req , Extra $day){
        $newelm = $req->validate([
            'content'=>'required',
        ]);
        $newelm['extra_id'] = $day->id;
        
        GoodThings::create($newelm);
        return redirect("/extra/{$day->id}/things");
    }

    public function Achive(Request $req, Extra $day ){
        $newelm = $req->validate([
            'content'=>'required',
        ]);
        $newelm['extra_id'] = $day->id ;
        Achives::create($newelm);
        return Redirect::back();
    }
}
