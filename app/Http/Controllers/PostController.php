<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;
use Storage;

class PostController extends Controller
{
    public function index(Post $post)
  {
    $posts = Post::all();  
    return view('index')->with(['posts' => $post->getPaginateByLimit(4)]);
  }
    public function show(Post $post)
  {
    return view('show')->with(['post' => $post]);
  }
    public function create()
  {
    return view('create');
  }
   public function store(Post $post, PostRequest $request)
  {
     $input = $request['post'];
     $post->fill($input)->save();
          //s3アップロード開始
     $image = $request->file('image');
      // バケットの`cafe-image/`フォルダへアップロード
     $path = Storage::disk('s3')->putFile('myprefix',$image,'public');
      // アップロードした画像のフルパスを取得
     $post->image = Storage::disk('s3')->url($path);
     $post->save();
     return redirect('/posts/' . $post->id);
  }
  
   public function edit(Post $post)
  {
  return view('edit')->with(['post' => $post]);
  }
  
  public function update(PostRequest $request, Post $post)
  {
    $input = $request['post'];
    $post->fill($input)->save();
    return redirect('/posts/' . $post->id);
  }
  public function destroy(Post $post)
  {
    $post->delete();
    return redirect('/');
  }
}