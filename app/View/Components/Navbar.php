<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $elms =['rules','extra','meadvices','objectives','timer','notes'];
    public $class ; 
    /**
     * Create a new component instance.
     */
    public function __construct($elms = null)
    {
        // $elms = preg_replace('/[[:^print:]]/', '', $elms);
        // $decoded = json_decode($elms , true);
        // dd(var_dump($elms));
        if(isset($elms)){
            $this->elms = $elms ; 
        }
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
