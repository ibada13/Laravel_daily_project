<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Toodocard extends Component
{
    /**
     * Create a new component instance.
     */
    public $elms  ; 
    public $bp ;
    public function __construct($elms = null , $bp = null)
    {
        // dd($elms);
        $this->elms = $elms ;
        $this->bp = $bp  ; 
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.md.toodocard');
    }
}
