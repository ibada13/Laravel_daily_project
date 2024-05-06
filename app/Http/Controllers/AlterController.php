<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rules;
use App\Models\objectives;
use App\Models\Meadvices;
use App\Models\Toodo;
use App\Models\Extra;


class AlterController extends Controller
{
    public function Rule(Request $req,Rules $rule ){
        // dd($req);
        $newelm = $req->validate([
            'content'=>'required',
        ]);
       
        $rule->update($newelm);
        // dd($elm);
        return redirect('/');
    }



    public function Objective(Request $req,Objectives $objective ){
        
        $newelm = $req->validate([
            'content'=>'required',
        ]);
        // dd($objective);
        $objective->update($newelm);
        // dd($elm);
        return redirect('/objectives');
    }

    public function Meadvice(Request $req , Meadvices $meadvice ){
        $newelm = $req->validate([
            'content'=>'required',
        ]);
        $meadvice->update($newelm);
        return redirect('/meadvices');
    }
    public function Toodo(Request $req ,Extra $day, Toodo $toodo){
        $newelm = $req->validate([
            'content'=>'required',
        ]);
        $toodo->update($newelm);
        // dd($newelm , $toodo);
        return redirect("/extra/{$day->id}/toodo");

    }
    public function is_done(Extra $day , Toodo $id ){
        $id->update(["is_Done" => true]);
        return back();
    }
}
