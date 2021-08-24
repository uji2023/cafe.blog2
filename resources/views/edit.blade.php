<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
      　<meta charset="utf-8">
        <title>cafe.blog</title>
    </head>
    
    <body>
       <h1>CAFE BLOG</h1>
            <form action="/posts/{{ $post->id }}" method="POST">
                {{ csrf_field() }}   
                 @method('PUT')
                 
                <div class="title">
                    <h2>cafe's name</h2>
                    <input type="text" name="post[title]" placeholder="cafe's name" value="{{ $post->title }}">
                    <p class="name__error" style="color:red">{{ $errors->first('post.title') }}</p>
                </div>
                
                <input type="file" name="image">  <!-- アップロードフォームの作成 -->
                
                <div class="detail_cafeURL">
                    <h2>cafe's URL</h2>
                    <input type="text" name="post[detail_cafeURL]" placeholder="URL" value="{{ $post->detail_cafeURL }}">
                    <p class="URL__error" style="color:red">{{ $errors->first('post.detail_cafeURL') }}</p>
                </div>
                
                <div class="body">
                    <h2>place</h2>    
                    <textarea  name="post[body]" placeholder="place" > {{ $post->body }} </textarea>
                    <p class="place__error" style="color:red">{{ $errors->first('post.body') }}</p>
                </div>
                
                <div class="detail_foodname">
                    <h2>food's name</h2>    
                    <input type="text" name="post[detail_foodname]" placeholder="food's name"value="{{ $post->detail_foodname }}">
                    <p class="food's name__error" style="color:red">{{ $errors->first('post.detail_foodname') }}</p>
                </div>
                <input type="submit" value="update">
            </form>
                <div class='back'>[<a href="/posts/{{ $post->id}}">back</a>]</div>
    </body>
    
</html>
