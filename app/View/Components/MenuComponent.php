<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Blog;
use App\Models\Author;

class MenuComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $menuAuthors;
    public $menuPosts;
    public function __construct()
    {
        //
        $this->menuAuthors = Author::all();
        $this->menuPosts = Blog::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu-component');
    }
}
