<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <meta charset="utf-8">
        <title>cafe.blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
       <h1>CAFE BLOG</h1>
       <p class='create'>[<a href='/posts/create'>create</a>]</p>
       <div class='posts'>
         @foreach ($posts as $post)
           <div class='post'>
               <a href='/posts/{{$post->id}}'><h2 class='title'>{{$post->title}}</h2></a>
    　　　　　 　　　　@if($post->image)   　　　　 
    　　　　　 　　　　<!-- 画像を表示 -->
      　　　  　　　<img src="{{ $post->image }}">
   　　　      　@endif
               <p class='body'>{{$post->body}}</p>
               <p class='detail_foodname'>{{$post->detail_foodname}}</p>
               <p class='detail_cafeURL'>{{$post->detail_cafeURL}}</p>
           </div>
          @endforeach
       </div>
       <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>
