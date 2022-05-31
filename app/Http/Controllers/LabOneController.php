<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class LabOneController extends Controller
{
    public function index(){
        return view('lab_one', [
            'posts' => Post::get()
        ]);
    }

    public function getData(Request $req){
        Comment::insert(array(
            'user_id' => $req->input('user_id'),
            'text' => $req->input('text'),
            'post_id' => $req->input('post_id')
        ));

        return redirect()->route('lab_one');
    }
}
