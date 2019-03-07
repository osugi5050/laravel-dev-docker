@extends('layouts.application')
@section('title', '新規作成')
@section('content')
    <form action="/menus" method="post">
        {{ csrf_field() }}
        <div>
            <label for="name">メニュー名</label>
            <input type="text" name="name" placeholder="メニュー名を入れる">
        </div>
        <div>
            <label for="name">メニュー内容</label>
            <textarea name="body" rows="8" cols="80" placeholder="メニュー内容を入れる"></textarea>
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
@endsection