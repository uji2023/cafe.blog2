<!DOCTYPE html>
@extends('layouts.app') 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@section('content')   
    <head>
      　<meta charset="utf-8">
        <title>cafe.blog</title>
    </head>
    
    <div style="text-align: center">
    <body>
       <h1>CAFE BLOG</h1>
            <form action="/posts/{{ $post->id }}"  method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}   
                 @method('PUT')
                 
                <div class="title">
                    <h2>cafe's name</h2>
                    <input type="text" name="post[title]" placeholder="cafe's name" value="{{ $post->title }}">
                    <p class="name__error" style="color:red">{{ $errors->first('post.title') }}</p>
                </div>
                
                <input type="file" name="image"><!-- アップロードフォームの作成 -->

                
                <div class="detail_cafeURL">
                    <h2>cafe's URL</h2>
                    <input type="text" name="post[detail_cafeURL]" placeholder="URL" value="{{ $post->detail_cafeURL }}">
                    <p class="URL__error" style="color:red">{{ $errors->first('post.detail_cafeURL') }}</p>
                </div>
                
                <div class="detail_place">
                    <h2>place</h2>    
                    <input type="text" name="post[detail_place]" placeholder="place" value="{{ $post->detail_place }}">
                    <p class="place__error" style="color:red">{{ $errors->first('post.detail_place') }}</p>
                </div>
                
                <div class="detail_foodname">
                    <h2>food's name</h2>    
                   <textarea  name="post[detail_foodname]" placeholder="food's name">{{ $post->detail_foodname }}</textarea>
                    <p class="food's name__error" style="color:red">{{ $errors->first('post.detail_foodname') }}</p>
                </div>
                <input type="submit" value="update">
            </form>
                <div class='back'>[<a href="/posts/{{ $post->id}}">back</a>]</div>
    </body>
    </div>
    
</html>
@endsection('content')