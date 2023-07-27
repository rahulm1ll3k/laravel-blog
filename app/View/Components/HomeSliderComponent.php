<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Blog;

class HomeSliderComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $slidePosts;
    public function __construct()
    {

        $this->slidePosts = Blog::all();

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home-slider-component');
    }
}
