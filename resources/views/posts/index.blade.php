<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Blog</title>
        <link rel="stylesheet" hrel="https://fonts.googleapis.com/css?family=Nunito:200,600">

   </head>
    <body>
       <h1>Blog Name</h1>
       <a href="/posts/create">create</a>
        <div class="posts">
            <div class="post">
                @foreach ($posts as $post)
                <a href="/posts/{{$post ->id}}"><h2 class="title">{{$post ->title}}</h2></a>
                <p class="body">{{$post ->body}}</p>
                @endforeach
            </div>
        </div>
        <div class="paginate">{{$posts ->links()}}</div>
        
    
    
    </body> 
</html>