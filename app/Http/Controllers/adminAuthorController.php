<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Author;

class adminAuthorController extends Controller
{

    //
    public function authorsList() {
        $all_authors = Author::all();
        return view('admin.author.author-list', compact('all_authors'));
    }

    //
    public function authorView($id) {

        if(!isset($id) || empty($id)) {
            return redirect()->back();
        }

        $getSingle = Author::find($id);

        if($getSingle->count()) {
            $author = $getSingle;
            return view('admin.author.author-view', compact('author'));
        } else {
            return redirect('backend/authors')->with(['error' => 'Author Not Found']);
        }
    }

    //
    public function authorNew() {
        return view('admin.author.author-new');
    }

    //
    public function authorAdd(Request $req) {
        $authorNew = new Author;

        /*
        $validator = Validator::make($req->all(), [
            'name' => 'required|max:255',
            'email' => 'required|unique:authors,author_email|max:255',
            'role' => 'max:3',
            'bio' => 'max:255',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        */

        $req->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:authors,author_email|max:255',
            'role' => 'max:3',
            'bio' => 'max:255',
        ]);

        $authorNew->author_name = $req['name'];
        $authorNew->author_email = $req['email'];
        $authorNew->author_bio = $req['bio'];
        $authorNew->author_role = $req['role'];

        $path = "";
        if($req->hasFile('featured-image')) {
            $file = $req->file('featured-image');
            $fileName = $file->getClientOriginalName();
            $fileLocation = \strtolower($req['name']);
            $path = $req->file('featured-image')->storeAs($fileLocation, $fileName, 'public');
        }

        $authorNew->author_image = '/storage/'.$path;

        $authorPush = $authorNew->save();

        if($authorPush) {
            return redirect()->route('admin.author');
        } else {
            return redirect()->route('admin.author.new');
        }

    }

    //
    public function authorEdit($id) {

        $authorFind = Author::find($id);
        $author = $authorFind;

        if($authorFind) {
            return view('admin.author.author-edit', compact('author'));
        } else {
            return redirect()->route('admin.author')->with(['err' => 'Author Not Found']);
        }

    }

    //
    public function authorUpdate(Request $req) {

        $errorMessages = array(
            'success' => 'Author Updated Successfully',
            'missing' => 'Sorry but the author you are looking for doesn\' exists.',
            'err' => 'There Was An Error While Updating the Author'
        );

        $authorEdit = Author::find($req->validation_token);

        if(!$authorEdit) {
            return redirect()->route('admin.author')->with(['missing' => $errorMessages['missing']]);
        }

        /*
        $req->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:authors,author_email|max:255',
            'role' => 'max:3',
            'bio' => 'max:255',
        ]);
        */

        $authorEdit->author_name = $req['name'];
        // $authorEdit->author_email = $req['email'];
        $authorEdit->author_bio = $req['bio'];
        $authorEdit->author_role = $req['role'];

        $path = "";
        if($req->hasFile('featured-image')) {
            $file = $req->file('featured-image');
            $fileName = $file->getClientOriginalName();
            $fileLocation = \strtolower($req['name']);
            $path = $req->file('featured-image')->storeAs($fileLocation, $fileName, 'public');

            $authorEdit->author_image = '/storage/'.$path;
        }

        $authorPush = $authorEdit->save();

        if($authorPush) {
            return redirect()->route('admin.author.edit', ['id' => $req->validation_token])->with(['success' => $errorMessages['success']]);
        } else {
            return redirect()->route('admin.author.edit', ['id' => $req->validation_token])->with(['err' => $errorMessages['err']]);
        }

    }

    //
    public function authorDelete($id) {

        $errorMessages = array(
            'success' => 'Author Deleted Successfully',
            'missing' => 'Sorry but the author you are looking for doesn\' exists.',
            'err' => 'There Was An Error While Deleting the Author'
        );

        $data = Author::find($id);

        if(!$data){
            return redirect()->route('admin.author')->with(['missing' => $errorMessages['missing']]);
        }

        $status = $data->delete();

        if($status) {
            return redirect()->route('admin.author')->with(['success' => $errorMessages['success']]);
        } else {
            return redirect()->route('admin.author')->with(['err' => $errorMessages['err']]);
        }

    }
}
