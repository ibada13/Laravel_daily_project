<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class textarea extends Component
{
    public $class = " text-center w-5/6 border-l border-accent bg-thrback text-text text-lg focus:outline-none focus:border focus:border-text rounded-md p-2 min-h-12";
    public $theme ;
    public $content;
    public $buttonclass ; 
    public $buttontheme;
    public $buttoncontent ;
    public $buttonmethod ; 
    public $buttondir ; 
    /**
     * Create a new component instance.
     */
    public function __construct($content = null,$class = null , $buttonclass=null , $theme = null , $buttontheme = null ,$buttoncontent = null,  $buttondir = null , $buttonmethod = null)

    {
        
        $this->content = $content;
        $this->buttonclass = $buttonclass; 
        $this->buttontheme = $buttontheme;
        $this->theme = $theme;
        $this->buttoncontent = $buttoncontent;
        $this->class = $this->class . " " . $class ;
        $this->buttondir = $buttondir ;
        $this->buttonmethod = $buttonmethod ;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sm.textarea');
    }
}
