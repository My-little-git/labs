<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function updatePost(Request $req){
        Post::where('id', $req->input('id'))->update(array(
            'title' => $req->input('title'),
            'text' => $req->input('text'),
        ));
        return redirect()->route('lab_one');
    }

    public function deletePost($id){
        Post::where('id', $id)->delete();

        return redirect()->route('lab_one');
    }
}
