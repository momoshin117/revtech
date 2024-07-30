<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Blog</title>
        <link rel="stylesheet" hrel="https://fonts.googleapis.com/css?family=Nunito:200,600">

   </head>
   <body>
       <h1>Blog Name</h1>
       <form action="/posts/{{$post ->id}}" method="POST">
           @csrf
           @method('PUT')
           <div class="title">
               <h2>Title</h2>
               <input type="text" name="post[title]" placeholder="タイトル" value={{$post ->title}}></input>
               <p class="title_error" style="color:red">{{$errors ->first('post.title')}}</p>
           </div>
           <div class="body">
               <h2>Body</h2>
               <textarea name="post[body]" placeholder="今日も一日お疲れさまでした。">{{$post ->body}}</textarea>
               <p class="body_error" style="color:red">{{$errors ->first('post.body')}}</p>
           </div>
           <input type="submit" value="update"></input>
       </form>
       <div>
            <a href="/posts/{{$post ->id}}">戻る</a>
        </div>
    </body> 
    
</html>