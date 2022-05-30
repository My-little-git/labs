<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function updateComment(Request $req){
        Comment::where('id', $req->input('id'))->update(array(
            'name' => $req->input('name'),
            'text' => $req->input('text'),
            'updated_at' => date('Y-m-d H:i:s')
        ));
        return redirect()->route('lab_one');
    }

    public function deleteComment($id){
        Comment::where('id', $id)->delete();

        return redirect()->route('lab_one');
    }
}
