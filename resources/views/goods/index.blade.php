<!doctype html>
<html lang="ja">
  <head>
    <title>Laravelチュートリアル</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <h1>物品一覧</h1>

  <div class="row">
    <div class="col-sm-2">
      <form action="#" method="post">
        <p>物品名：<br>
        <input type="text" name="name"></p>
        <p>物品コード：<br>
        <input type="text" name="mail"></p>
	    <p><input type="submit" value="検索"></p>
      </form>
    </div>
    
    <div class="col-sm-10">
      <p><a href="create" class="btn btn-primary">新規追加</a></p>
      @foreach ($goods as $good)
        <div class="card mb-2">
          <div class="card-body">
            <h4 class="card-title">{{ $good->code }}</h4>
            <h6 class="card-subtitle mb-2 text-muted">{{ $good->updated_at }}</h6>
            <p class="card-text">{{ $good->name }}</p>
            <a href="edit/{{ $good->id }}" class="card-link">修正</a>
          </div>
        </div>
      @endforeach
   </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</html>