<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\blogController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\adminAuthorController;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dummy/{id}', function ($id) {
    return "The id is".$id;
})->name('dummy');
Route::get('/dummy/new', function () {
    return redirect()->route('dummy', ['id' => 1, 'author' => 1]);
});
*/

Route::get('/', [blogController::class, 'index'])->name('blog.home');
Route::get('/posts', [blogController::class, 'allPosts'])->name('blog.all');
Route::get('/authors', [blogController::class, 'allAuthors'])->name('blog.author');

Route::get('/post/{slug}', [blogController::class, 'getSingle'])->name('blog.single.post');
Route::get('/author/{slug}', [blogController::class, 'getSingleAuthor'])->name('blog.single.author');

Route::get('/category', [blogController::class, 'category'])->name('blog.category');
Route::get('/contact', [blogController::class, 'contact'])->name('blog.contact');



Route::get('/backend', [adminController::class, 'index'])->name('admin.home');
Route::get('/backend/posts', [adminController::class, 'post_list'])->name('admin.post');
Route::get('/backend/typography', [adminController::class, 'typography']);
// Route::get('/backend/post/{slug}', [adminController::class, 'postView']);
Route::get('/backend/post/{id}', [adminController::class, 'postView'])->name('admin.post.view');
Route::get('/backend/post/new', [adminController::class, 'postNew'])->name('admin.post.new');
Route::post('/backend/post/new', [adminController::class, 'postAdd']);



Route::get('/backend/authors', [adminAuthorController::class, 'authorsList'])->name('admin.author');
Route::get('/backend/author/{id}', [adminAuthorController::class, 'authorView']);
Route::get('/backend/author-view/{id}', [adminAuthorController::class, 'authorView']);
Route::get('/backend/author-new', [adminAuthorController::class, 'authorNew'])->name('admin.author.new');
Route::post('/backend/author-new', [adminAuthorController::class, 'authorAdd']);
Route::get('/backend/author-edit/{id}', [adminAuthorController::class, 'authorEdit'])->name('admin.author.edit');
Route::post('/backend/author-add', [adminAuthorController::class, 'authorUpdate']);
Route::get('/backend/author-delete/{id}', [adminAuthorController::class, 'authorDelete']);



// testing routs

Route::get('/test/posts', [TestController::class, 'index']);
