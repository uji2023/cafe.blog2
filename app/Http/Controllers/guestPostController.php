<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;
use Storage;

class guestPostController extends Controller
{
    public function index(Post $post)
  {
    $posts = Post::all();  
    return view('index')->with(['posts' => $post->getPaginateByLimit(2)]);
    
   
  }
    public function show(Post $post)
  {
    return view('show')->with(['post' => $post]);
  }
   
}