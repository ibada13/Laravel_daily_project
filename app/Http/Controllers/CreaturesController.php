<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Error;
use App\Models\Objectives;
use App\Models\Rules;
use Illuminate\Support\Facades\Redirect;

class CreaturesController extends Controller
{
   public $t = [];
   public $bp = [] ;

    public function __construct(){}
    public function annihilation(Rules $rule){
        $rule->delete() ;
            return Redirect::back();
    }



    public function edit(Request $req,Rules $elm ){
        // dd($elm);
        return view('angels.Harut',[
            'content'=>$elm,
        ]);
    }

    public function update(Request $req,Rules $elm ){
        // dd($req);
        $newelm = $req->validate([
            'content'=>'required'
        ]);
        
        $elm->update([
            'content' =>$req['content'],
        ]);
        // dd($elm);
        return redirect('/');
    }
    public function me_advices(){
        return view('adam.sapp',[
            "t"=>$this->t,
            "bp"=>$this->bp,
        ]);
    } 
    public function extra(){
        $t = array();
        for($i =0;$i<5;$i++){
            $t[$i]['id']=$i;
            $t[$i]['createdat']='day : '.$i; 
        }
        $bp['content'] = "Delete";
        $bp['theme'] = "delete";
        return view('humans.extra',[
            "t"=>$t
        ]);
    }
    public function days($id){
        if(is_numeric($id)){

            return view('angels.Israfil',[
                'id'=>$id
            ]);
        }   
        else{
            $errres = new Error();
            return $errres->show("id not found");
        } 
    }
    public function todo($id){
        return view('humans.toodo' , [
            "id"=>$id,
        ]);
    }
    public function things($id){
        return view('humans.things');
    }
}
    