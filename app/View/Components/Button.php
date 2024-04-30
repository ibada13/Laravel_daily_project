<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $content;
    public $class ; 
    public $id ; 
    public $dir ; 
    public $method  ; 
    /**
     * Create a new component instance.
     */
    public function __construct($content = "SUBMIT" , $theme=null,$class = null , $dir = null , $id = null ,$method="POST")
    {
        $this->method = $method;
        $this->content = $content;
        $this->id = $id ; 
        $this->dir = $dir; 
        
        if($theme == "ADD" || $theme == "add"){
            $this->class = "bg-gr uppercase p-2 rounded-lg transition hover:bg-accent  text-back";
        }
        else if($theme == "DELETE" || $theme == "delete"){
            $this->class = "bg-ar uppercase p-2 rounded-lg transition hover:bg-accent text-back";  

        }
        else{
            $this->class = "w-3/4 text-back bg-secondory hover:bg-text ml-2 transition rounded-lg h-16 uppercase";    
        }
        $this->class = $this->class .  " " .  $class ;
    }
    

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sm.button');
    }
}
