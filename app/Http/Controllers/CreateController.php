<?php

namespace App\Http\Controllers;
use App\Models\Rules;
use App\Models\objectives;
use Illuminate\Http\Request;

class CreateController extends Controller
{

    
    public function addRule(Request $req){
        $newelm = $req->validate([
            "content"=>"required",
        ]);
        Rules::create($newelm);
        return redirect('/');

    }
}
