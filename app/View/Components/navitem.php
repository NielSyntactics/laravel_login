<?php

namespace App\View\Components;

use Illuminate\View\Component;

class navitem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $text;
    public $route;

    public function __construct($route, $text)
    {
        $this->route = $route;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navitem');
    }
}
