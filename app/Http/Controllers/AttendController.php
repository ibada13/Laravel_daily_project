<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rules;
use App\Models\objectives;
use App\Models\Meadvices;

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

    public function EditRule(Request $req,Rules $rule ){
        // dd($Rule);
        return view('angels.Harut',[
            'content'=>$rule,
            'dir'=>'/update',
        ]);
    }

    
    
    
    public function Objective(){
        $buttonAttributes  = [
            ['content'=> 'EDIT','method'=> 'GET' , 'dir'=> 'objectives/edit' , 'theme'=> 'add' ],
            ['content'=> 'DELETE','method'=> 'DELETE' , 'dir'=> 'objectives' , 'theme'=> 'delete'],
        ];
        $this->setter($buttonAttributes);
        return view('adam.sapp',[
            "t"=>Objectives::latest()->paginate(10),
            "bp"=>$this->bp,
            "dir"=>"/objectives",
            "buttonmethod"=>"POST"
        ]);
    }

    public function EditObjective(Request $req,Objectives $objective  ){
        // dd($elm);
        return view('angels.Harut',[
            'content'=>$objective,
            'dir'=>'/objectives/update'
        ]);
    }


    public function Meadvice(){
        $buttonAttributes  = [
            ['content'=> 'EDIT','method'=> 'GET' , 'dir'=> 'meadvices/edit' , 'theme'=> 'add' ],
            ['content'=> 'DELETE','method'=> 'DELETE' , 'dir'=> 'meadvices' , 'theme'=> 'delete'],
        ];
        $this->setter($buttonAttributes);
        return view('adam.sapp',[
            "t"=>Meadvices::latest()->paginate(10),
            "bp"=>$this->bp,
            "dir"=>"/meadvices",
            "buttonmethod"=>"POST"
        ]);
    }


    public function EditMeadvice(Request $req,Meadvices $meadvice  ){
        // dd($elm);
        return view('angels.Harut',[
            'content'=>$meadvice,
            'dir'=>'/meadvice/update'
        ]);
    }
}
