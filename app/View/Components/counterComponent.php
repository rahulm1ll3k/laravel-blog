<?php

namespace App\View\Components;

use Illuminate\View\Component;

class counterComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $count = 0;

    public function __construct()
    {
        //
    }

    public function increment() {

        $this->counter++;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.counter-component');
    }
}
