<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rules;
use App\Models\objectives;
class AttendController extends Controller
{
    public $bp ; 
    public function setter($attrs){
        foreach($attrs as $attr){
            $this->bp[] = $attr;
        }
    
       }
    public function Rule(){
        // dd(Rules::all());
        $buttonAttributes  = [
            ['content'=> 'EDIT','method'=> 'GET' , 'dir'=> 'edit' , 'theme'=> 'add' ],
            ['content'=> 'DELETE','method'=> 'DELETE' , 'dir'=> '' , 'theme'=> 'delete'],
        ];
        $this->setter($buttonAttributes);
        return view('adam.sapp',[
            "t"=>Rules::latest()->paginate(10),
            'bp'=>$this->bp ,
            'dir'=>"/",
            "buttonmethod"=>"POST"
        ]);
    }
    public function objectives(){
        return view('adam.sapp',[
            "t"=>Objectives::all(),
            "bp"=>$this->bp,
            "dir"=>"/objectives"
        ]);
    }
}
