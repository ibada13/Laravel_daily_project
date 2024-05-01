<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rules;
use App\Models\objectives;
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
}
