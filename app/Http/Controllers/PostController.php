<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function updatePost(Request $req){
        Post::where('id', $req->input('id'))->update(array(
            'title' => $req->input('title'),
            'message' => $req->input('message'),
        ));
        return redirect()->route('lab_one');
    }

    public function showPost($id){
        return view('edit_post', [
            'post' => Post::find($id)
        ]);
        dd($id);
    }

    public function deletePost($id){
        Post::where('id', $id)->delete();

        return redirect()->route('lab_one');
    }
}
