@extends('layouts.layout')

@section('title', '認証ページ')

@section('header')
    <div class="container">
        <h3>認証ぺーじです。</h3>
        <p>メールアドレスとパスワードを入力してください。</p>
        <p>{{$message}}</p>
    </div>  
@endsection

@section('contents')
    <div class="container">
        <form action="/study/auth" method="post">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="Email">
                </div>
                <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputEmail3" placeholder="Email" name="password">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Sign in</button>
              </div>
            </div>
      </form>                  
    </div>
@endsection

@section('footer')
    <br>
    <div class="container">
        <p>Copyright たなしょ 2018</p>
    </div>
@endsection