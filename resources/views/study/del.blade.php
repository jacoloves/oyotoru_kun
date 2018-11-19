@extends('layouts.layout')

@section('title', '勉強時間削除ページ')

@section('header')
    <div class="container">
        <h3>勉強時間や勉強項目を削除するページです。</h3>
        <p>削除したいレコードを選んでください。</p>
    </div>  
@endsection

@section('contents')
    <div class="container">
        <form action="/study/del" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$sel_row->id}}">
            <table class="table">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>勉強した科目</th>
                    <th>日付</th>
                    <th>勉強時間</th>
                    <th>コメント</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-danger">
                    <th scope="row">{{$sel_row->id}}</th>
                    <td>{{$sel_row->name}}</td>
                    <td>{{$sel_row->date}}</td>
                    <td>{{$sel_row->hour}}:{{$sel_row->minute}}</td>
                    <td>{{$sel_row->comment}}</td>
                  </tr>
                </tbody>
            </table>          
            <br>
            <button type="submit" class="btn btn-danger">削除</button>    
        </form>
    </div>
@endsection

@section('footer')
    <br>
    <div class="container">
        <p>Copyright たなしょ 2018</p>
    </div>
@endsection