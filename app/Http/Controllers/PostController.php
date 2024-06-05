<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    
   public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->getByLimit()]);
    }
    
    public function reportCreate()
    {
        return view('posts.reportcreate');
    }
    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/reportcreate' . $post->id);
    }
}
