<!doctype html>
<html lang="en">
  <head lang="{{ app()->getLocale() }}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css')}} " integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/sass/app.scss') }}">

    <title>Hello, world!</title>
  </head>
  <body>
        <header>
                <h1>勉強時間測定</h1>
                <h2>下の表に勉強時間が出力されるよ。</h2>
            </header>
            <div class="main">
                <table class="table_study">
                    <thead class="thead-titile">
                        <tr>
                            <th>id</th>
                            <th>勉強した科目</th>
                            <th>日付</th>
                            <th>勉強時間</th>
                            <th>コメント</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($items as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->hour}}:{{$item->minute}}</td>
                            <td>{{$item->comment}}</td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>  
            </div>
            <footer>
                <p>copyright 2018 たなしょ</p>
            </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


<!--
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>indexPage</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../../sass/app.scss">
    </head>
    <body>
        <header>
            <h1>勉強時間測定</h1>
            <h2>下の表に勉強時間が出力されるよ。</h2>
        </header>
        <div class="main">
            <table class="table_study">
                <thead class="thead-titile">
                    <tr>
                        <th>id</th>
                        <th>勉強した科目</th>
                        <th>日付</th>
                        <th>勉強時間</th>
                        <th>コメント</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($items as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->date}}</td>
                        <td>{{$item->hour}}:{{$item->minute}}</td>
                        <td>{{$item->comment}}</td>
                    </tr>
                  @endforeach
                </tbody>
            </table>  
        </div>
        <footer>
            <p>copyright 2018 たなしょ</p>
        </footer>
    </body>
</html>
