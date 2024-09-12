<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rules;
use App\Models\objectives;
use App\Models\Meadvices;
use App\Models\Toodo;
use App\Models\Extra;
use App\Models\GoodThings;
use App\Models\BadThings;
use App\Models\Achives;
use App\Models\Notes;
use App\Models\SubTopics;
use App\Models\Topics;

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
        // dd($newelm , $toodo,$req);
        return redirect("/extra/{$day->id}/toodo");

    }
    public function is_done(Extra $day , Toodo $id ){
        $id->update(["is_Done" => true]);
        return back();
    }

    
    public function GoodThing(Request $req ,  Extra $day , GoodThings $thing){
        $newelm = $req->validate([
            "content"=>"required",
        ]);

        $thing->update($newelm);
        return redirect("/extra/{$day->id}/things");
    }


    public function BadThing(Request $req ,  Extra $day , BadThings $thing){
        $newelm = $req->validate([
            "content"=>"required",
        ]);

        $thing->update($newelm);
        return redirect("/extra/{$day->id}/things");
    }

    


    public function Achive(Request $req , Extra $day , Achives $achive){
        $newelm = $req->validate([
           'content'=>"required" 
        ]);
        $achive->update($newelm);

        return redirect("/extra/{$day->id}/achives/");
    }
    public function Notes(Request $req , Notes $note){
        $newnote = $req->validate([
            'content'=>'required',
        ]);
        $newnote['note']=$newnote['content'];
        $note->update($newnote);
        $parent = SubTopics::find($note['sub_topics_id']);
        $gp=Topics::find($parent->topics_id);
        return redirect("/notes/{$gp->id}/{$parent->id}");
    }
}
