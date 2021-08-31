<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
   <meta charset="utf-8">
   <title>cafe.blog</title>
   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
  </head>
       
   <body bgcolor="#ffefd5">
  
    <h2><span style="color:#800000;">CAFE BLOG</span></h2>
       
   <div class='post'>
        <h1 class='title'>{{ $post->title}}</h1> 
        <img src="{{ $post->image}}" class='image'></img>
        
        <div><?php echo "<strong><font color=\"blown\">~PLACE~</font></strong>"?></div>
        
        <p class='detail_place'>{{$post->detail_place}}</p>
        
        <?php echo "<strong><font color=\"blown\"> ~FOOD'S NAME~ </font></strong>"?>
        
        <p class='detail_foodname'>{{$post->detail_foodname}}</p>
    
        <?php echo "<strong><font color=\"blown\"> ~DATE OF UPDATING~ </font></strong>"?>
        
     
        <p class='detail_cafeURL'><a href='{{$post->detail_cafeURL}}'>~CAFE'S URL~</a></p>
   </div>
          
   <div class='back'>[<a href='/'>back</a>]</div>
   
   
  </body>
</html>
