<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Blog;

class sidebarComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $recentPost;
    public $users;
    public $categories;
    public function __construct(
        public string $category = ''
    )
    {
        $this->users = array(
            1 => "Rahul",
            2 => "Wahidul",
            3 => "Touhid",
            4 => "Farhan Sadiq",
        );
        $this->categories = array(
            1 => "Politics",
            2 => "Business",
            3 => "Health",
            4 => "Design",
            5 => "Sport",
        );
        $this->recentPost = Blog::all();


    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar-component');
    }
}
