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






   
    public function me_advices(){
        return view('adam.sapp',[
            "t"=>$this->t,
            "bp"=>$this->bp,
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
    // public function todo($id){
    //     return view('humans.toodo' , [
    //         "t"=>[["content"=>"htis is first " ],[ "content"=>"this is second"]],
    //         "bp"=>["dir"=>"test"],
    //         'dir'=>'test'
    //     ]);
    // }
    public function things($id){
        return view('humans.things');
    }
}
    