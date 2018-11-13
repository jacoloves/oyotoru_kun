@extends('layouts.layout')

@section('title', 'Study.index')

@section('header')
    <h1>勉強時間測定</h1>
    <h2>下の表に勉強時間が出力されるよ。</h2>
@endsection

@section('content')
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
@endsection

@section('footer')
    copyright 2017 たなしょ
@endsection
