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
    　<h2>CAFE BLOG</h2>
   
       @if(Auth::check())  <!--ログイン中のuseのみ-->
       <p class='edit'>[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
       @endif
      
           <div class='post'>
             　<h1 class='title'>{{ $post->title}}</h1> 
             　<img src="{{ $post->image}}" class='image'></img>
                
                  <div><?php echo "<strong><font color=\"blown\">~PLACE~</font></strong>"?></div>
                    <p class='detail_place'>{{$post->detail_place}}</p>
                
                  <div><?php echo "<strong><font color=\"blown\"> ~FOOD'S NAME~ </font></strong>"?></div>
                    <p class='detail_foodname'>{{$post->detail_foodname}}</p>
              
                @if(Auth::check()) <!--ログイン中のuseのみ-->
                <div><?php echo "<strong><font color=\"blown\"> ~DATE OF UPDATING~ </font></strong>"?></div>
                <p class='updated_at'>{{$post->updated_at}}</p>
                @endif
                 
            　<p class='detail_cafeURL'><a href='{{$post->detail_cafeURL}}'>~{{ $post->title}} URL Plese click here!!~</a></p>
         　</div>
          
      　　<div class='back'>[<a href='/'>Go to list</a>]</div>
　　
     　　@if(Auth::check())　<!--ログイン中のuseのみ-->
     　　<form action="/posts/{{ $post->id }}" id="form_delete" method="post">
          　　@csrf
          　　@method('DELETE')
          　　<input type="submit" style="display:none">
          　　<p class='delete'>[<span onclick="return deletePost(this);">delete</span>]</p>
     　　</form>
     　　
     　　<script>
             function deletePost(e){
             'use strict';
             if (confirm('削除すると復元できません。\n本当に削除しますか？')){
             document.getElementById('form_delete').submit();
             }
             }
         </script>
         @endif
   
      </body>
  　　</div>
</html>
@endsection('content') 