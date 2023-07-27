<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Author;

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

        if(!isset($slug) || empty($slug)) {
            return redirect()->back();
        }

        $postExists = Blog::where('slug', '=', $slug);

        if($postExists->count() > 0) {

            $post = $postExists->get()->first();

            $authorSelectList = array(
                'author_name as a_name',
                'author_image as a_featured'
            );

            $theAuthor = Author::select($authorSelectList)->where('id', '=', $post->author)->get()->first();

            return view('blog.blog-single', compact('post', 'theAuthor'));

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















    //
    public function allAuthors() {

        $allAuthors = Author::paginate(10);

        return view('blog.author-all', compact('allAuthors'));

    }

    //
    public function getSingleAuthor($id) {

        if(!isset($id) || empty($id)) {
            return redirect()->route('blog.author')->with(['error' => 'Author Not Found']);
        }

        $theAuthor = Author::find($id);

        if(!$theAuthor) {
            return redirect()->route('blog.author')->with(['error' => 'Author Not Found']);
        }

        $allPosts = Blog::where('author', '=', $theAuthor->id)->get();

        return view('blog.author-single-list', compact('theAuthor','allPosts'));
    }

}
