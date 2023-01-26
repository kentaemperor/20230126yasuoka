<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/css/style.css" >
</head>

<body>
  <div class="container">
    <div class="card">
      <h1 class="title">Todo List</h1>
      <div class="todo">
        <form action="/todos/create" method="post">
          @csrf
          <input type="text" class="input-add" name="content">
          <input class="button-add" type="submit" value="追加">
        </form>
      </div>

      <table class="Todo">
        <tr>
          <th>作成日</th>
          <th>タスク名</th>            
          <th>更新</th>            
          <th>削除</th>
        </tr>

        @foreach ($todos as $todo)
        <tr>
          <td>投稿のidを表示</td>
          <td>投稿のタスク名を表示</td>
          <td>投稿の作成日を表示</td>
          <td>投稿の更新日を表示</td>
        </tr>
        @endforeach

         <tr>
            <td>              
              <input type="hidden" name="" value="">
            </td>
              <td>
               <input type="text" class="input-update" value="" name="content">
              </td>
            <td>
              <input type="submit" name="" value="">
              <button class="button-update">更新</button>
            </td>            
            <td>
             <input type="submit" name="" value="">  
             <button class="button-delete">削除</button>
            </td>
         </tr>
         
      </table>
    </div>
  </div>
</body>

</html>