<?php

namespace App\Http\Controllers;

use App\Models\Achives;
use Illuminate\Http\Request;
use App\Models\Rules;
use App\Models\objectives;
use App\Models\Meadvices;
use App\Models\Extra;
use App\Models\Toodo;
use App\Models\GoodThings;
use App\Models\BadThings;

use function PHPUnit\Framework\isInstanceOf;

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


    public function Extra(){
        return view('humans.extra',[
            'days'=>Extra::latest()->paginate(10),
        ]);
    }

    public function Days(int $day){
        return view('angels.Israfil' , [
            'id'=>$day
        ]);
    }
    public function Toodo(Extra $day){
        $buttonAttributes  = [
            ['content'=> 'EDIT','method'=> 'GET' , 'dir'=> 'toodo' , 'theme'=> 'add' ],
            ['content'=> 'DELETE','method'=> 'DELETE' , 'dir'=> 'toodo' , 'theme'=> 'delete'],
            ['content'=> 'Done','method'=> 'PUT' , 'dir'=> 'toodo' , 'theme'=> 'edit'],

        ];
        $this->setter($buttonAttributes);
        return view('humans.toodo' , [
            'id'=>$day->id,
            't'=>Toodo::where('extra_id' , $day->id)->latest()->paginate(10),
            'bp'=>$buttonAttributes,
            'dir'=>"/extra/{$day->id}/Toodo",
        ]);

    }
    public function EditToodo(Extra $day ,Toodo $toodo){
        return view('angels.Harut' , [
            'content'=>$toodo,
            'dir'=>"/extra/{$day->id}/toodo/update"
        ]);
    }

    
    public function Thing(Extra $day ){
        $buttonAttributes  = [
            ['content'=> 'EDIT','method'=> 'GET' , 'dir'=> '' , 'theme'=> 'add' ],
            ['content'=> 'DELETE','method'=> 'DELETE' , 'dir'=> '' , 'theme'=> 'delete'],
        ];
        $this->setter($buttonAttributes);
        $elms = GoodThings::where('extra_id', $day->id)->get()->merge(BadThings::where('extra_id', $day->id)->get())->sortBy('created_at');
        return view('humans.things',[
            'id'=>$day->id , 
            't'=>$elms,  
            'bp'=>$this->bp ,
            'gdir'=>"/extra/{$day->id}/goodthing",
            'bdir'=>"/extra/{$day->id}/badthing",
        ]);
    }


    public function EditBadThing(Extra $day , BadThings $thing){

        return view('angels.Harut' , [
            'content'=>$thing , 
            'dir'=>"/extra/{$day->id}/badthing",
        ]);
    }
    public function EditGoodThing(Extra $day , GoodThings $thing){
        return view('angels.Harut' , [
            'content'=>$thing , 
            'dir'=>"/extra/{$day->id}/goodthing",
        ]);
    } 
    


    public function Achive(Extra $day){
        $buttonAttributes  = [
            ['content'=> 'EDIT','method'=> 'GET' , 'dir'=> 'achive' , 'theme'=> 'add' ],
            ['content'=> 'DELETE','method'=> 'DELETE' , 'dir'=> 'achive' , 'theme'=> 'delete'],
        ];
        $this->setter($buttonAttributes);
        return view('humans.achives',[
            't'=>Achives::where('extra_id',$day->id)->latest()->paginate(10),
            'bp'=>$this->bp,
            'dir'=>"/extra/{$day->id}/achives",
            'id'=>$day->id,
            
        ]);
    } 



    public function EditAchive(Extra $day , Achives $achive){
        return view('angels.Harut',[
            'content'=>$achive,
            'dir'=>"/extra/{$day->id}/achive"
        ]);
    }
}
