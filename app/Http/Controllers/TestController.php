<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Author;
use App\Models\Blog;

class TestController extends Controller
{
    //
    public function index() {

        $data = DB::table('blogs')
        ->join(
            'authors',
                'blogs.author', '=', 'authors.id'
        )
        ->select(
            'blogs.*',
            'authors.author_name as author',
            'authors.author_image as auth_image',
        )
        ->get();

        return $data;

    }


}
