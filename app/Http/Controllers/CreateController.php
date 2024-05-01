<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Rules;
use App\Models\objectives;
use App\Models\Meadvices;
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

    }
}
