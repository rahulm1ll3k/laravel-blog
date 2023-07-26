<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Blog;

class adminController extends Controller
{
    //
    public function index() {
        return view('admin.index');
    }

    //
    public function post_list() {
        $all_posts = Blog::all();
        return view('admin.post-list', compact('all_posts'));
    }

    //
    public function postView($id) {

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

        if(!isset($id) || empty($id)) {
            return redirect()->back();
        }

        $getSingle = Blog::find($id);

        if($getSingle->count()) {
            $post = $getSingle;
            return view('admin.post-view', ['post' => $post, 'user' => $auth, 'post_cat' => $cat]);
        } else {
            return redirect('backend/posts')->with(['error' => 'Article Not Found']);
        }
    }

    //
    public function typography() {
        return view('admin.typography');
    }

    //
    public function postNew() {
        return view('admin.post-new');
    }

    //
    public function postAdd(Request $req) {
        $dataNew = new Blog;

        $auth = array(
            1 => "Rahul",
            2 => "Wahidul",
            3 => "Touhid",
            4 => "Farhan Sadiq",
        );

        $path = "";
        if($req->hasFile('featured-image')) {
            $file = $req->file('featured-image');
            $fileName = $file->getClientOriginalName();
            $fileLocation = $auth[$req['post-author']];
            $path = $req->file('featured-image')->storeAs($fileLocation, $fileName, 'public');
        }

        $dataNew->title = $req['post-title'];
        $dataNew->slug = Str::of($req['post-slug'])->slug('-');
        $dataNew->blog_content = $req['post-content'];

        $path = "";
        if($req->hasFile('featured-image')) {
            $file = $req->file('featured-image');
            $fileName = $file->getClientOriginalName();
            $fileLocation = $auth[$req['post-author']];
            $path = $req->file('featured-image')->storeAs($fileLocation, $fileName, 'public');
        }

        $dataNew->featured_image = '/storage/'.$path;

        // other details
        $dataNew->category = $req['post-category'];
        $dataNew->author = $req['post-author'];

        $dataUpdate = $dataNew->save();

        if($dataUpdate) {
            return redirect('posts');
        } else {
            return redirect('/backend/post/new');
        }

    }
}
