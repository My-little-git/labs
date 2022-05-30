<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class LabTwoController extends Controller
{
    public function getData($id = null, Request $req){
        Post::insert(array(
            'title' => $req->input('title'),
            'text' => $req->input('text')
        ));
            // else {
        //     Post::update(array(
        //         'title' => $req->input('title'),
        //         'text' => $req->input('text')
        //     ));
        // }
        return redirect()->route('lab_two');
    }
}
