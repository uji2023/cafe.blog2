<!DOCTYPE html>
@extends('layouts.app')
 
@section('content') 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <meta charset="utf-8">
            <title>cafe.blog</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    
   <div style="text-align: center">
        <body>
         
           <h1>CAFE BLOG</h1>
           @if(Auth::check())<!--ログイン中のuserのみ-->
           <p class='create'>[<a href='/create'>create</a>]</p>
           @endif
       
            <div class='posts'>
             @foreach ($posts as $post)
               <div class='post'>
                   <a href='/posts/{{$post->id}}'><h2 class='title'>{{$post->title}}</h2></a>
        　　　　　 　　　　@if($post->image)<!-- 画像を表示 --> 
          　　　 　 　　<a href='/posts/{{$post->id}}'><img src="{{ $post->image }}"></img></a>　　
       　　　        　@endif　
             　</div>
          　　@endforeach
       　　　</div>
       
      <div class='paginate'>{{ $posts->links() }}
     　</div>
　　　　</body>
　　</div>
</html>
@endsection('content')
