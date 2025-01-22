<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavbarComponent extends Component
{
    public $categories=[];
    public function __construct($categories)
    {
        $this->categories=$categories;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar-component');
    }
}
