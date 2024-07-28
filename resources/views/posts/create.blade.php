<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Blog</title>
        <link rel="stylesheet" hrel="https://fonts.googleapis.com/css?family=Nunito:200,600">

   </head>
   <body>
       <h1>Blog Name</h1>
       <form action="/posts" method="POST">
           @csrf
           <div class="title">
               <h2>Title</h2>
               <input type="text" name="post[title]" placeholder="タイトル"></input>
           </div>
           <div class="body">
               <h2>Body</h2>
               <textarea name="post[body]" placeholder="今日も一日お疲れさまでした。"></textarea>
           </div>
           <input type="submit" value="store"></input>
       </form>
       <div>
            <a href="/">戻る</a>
        </div>
    </body> 
    
</html>