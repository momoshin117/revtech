<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Blog</title>
        <link rel="stylesheet" hrel="https://fonts.googleapis.com/css?family=Nunito:200,600">

   </head>
   <body>
       <h1 class="title">
           {{$post ->title}}
       </h1>
        <div class="content">
            <div class="content_post">
                <h3>本文</h3>
                <p class="body">{{$post ->body}}</p>
                
            </div>
        </div>
        <div>
            <a href="/">戻る</a>
        </div>
        
    
    
    </body> 
    
</html>