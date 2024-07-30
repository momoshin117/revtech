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
                <form action="/posts/{{$post ->id}}" id="form_{{$post ->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{$post -> id}})">delete</button>
                </form>
                @endforeach
            </div>
        </div>
        <div class="paginate">{{$posts ->links()}}</div>
        
        <script>
            function deletePost(id){
                'use strict'
                if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        
    
    
    </body> 
</html>