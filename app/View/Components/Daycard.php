<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Daycard extends Component
{

    /**
     * 
     * 
     * Create a new component instance.
     */


     public $days ;
    public function __construct($days = null)
    
    {
        $this->days = $days ;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.md.daycard');
    }
}
