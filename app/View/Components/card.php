<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
    public $elms ;
    public $bp ;
    // bp stands for button parameter
    //["theme1" , "content 1 " , "theme 2 " , "content2"];
    /**
     * Create a new component instance.
     */
    public function __construct($elms=null , $bp = null )
    {
        // dd($bp);
        $this->elms = $elms ; 
        $this->bp = $bp ;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.md.taskcard');
    }
}
