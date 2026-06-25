<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts =post::with('user')
        ->latest()
        ->get();
        return view('feed',compact('posts'));
    }
}
