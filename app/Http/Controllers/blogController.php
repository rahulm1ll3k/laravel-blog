<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class blogController extends Controller
{

    //
    public function index() {

        $auth = array(
            1 => "Rahul",
            2 => "Wahidul",
            3 => "Touhid",
            4 => "Farhan Sadiq",
        );
        $cat = array(
            1 => "Politics",
            2 => "Business",
            3 => "Health",
            4 => "Design",
            5 => "Sport",
        );
        $allPosts = Blog::paginate(2);

        return view(
            'blog.index', [
                'slidePosts' => $allPosts,
                'user' => $auth,
                'post_cat' => $cat
            ]
        );

    }

    //
    public function allPosts() {

        $auth = array(
            1 => "Rahul",
            2 => "Wahidul",
            3 => "Touhid",
            4 => "Farhan Sadiq",
        );
        $cat = array(
            1 => "Politics",
            2 => "Business",
            3 => "Health",
            4 => "Design",
            5 => "Sport",
        );
        $allPosts = Blog::paginate(10);

        // Select title as article_title from () where id = ()

        return view(
            'blog.blog-all', [
                'allPosts' => $allPosts,
                'user' => $auth,
                'post_cat' => $cat,
                'resent_posts' => $allPosts
            ]
        );

    }

    //
    public function single() {
        return view('blog.blog-single');
    }

    //
    public function getSingle($slug) {

        $auth = array(
            1 => "Rahul",
            2 => "Wahidul",
            3 => "Touhid",
            4 => "Farhan Sadiq",
        );
        $cat = array(
            1 => "Politics",
            2 => "Business",
            3 => "Health",
            4 => "Design",
            5 => "Sport",
        );

        if(!isset($slug) || empty($slug)) {
            return redirect()->back();
        }

        $allPosts = Blog::all();
        $postExists = Blog::where('slug', '=', $slug);

        if($postExists->count() > 0) {
            $getAll = $postExists->get();
            $post = $getAll[0];
            return view(
                'blog.blog-single', [
                    'post' => $post,
                    'user' => $auth,
                    'post_cat' => $cat,
                    'resent_posts' => $allPosts
                ]
            );
        } else {
            return redirect('/')->with(['error' => 'Article Not Found']);
        }
    }

    //
    public function category() {
        return view('blog.category');
    }

    //
    public function contact() {
        return view('blog.contact');
    }

}
