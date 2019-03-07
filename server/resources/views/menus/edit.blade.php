@extends('layouts.application')
@section('title', 'メニュー編集')
@section('content')
    <form action="/menus/{{$menu->id}}" method="post">
        {{ csrf_field() }}
        <div>
            <label for="name">メニュー名</label>
            <input type="text" name="name" placeholder="メニュー名を入れる" value="{{$menu->name}}">
        </div>
        <div>
            <label for="body">メニュー内容</label>
            <textarea name="body" rows="8" cols="80" placeholder="メニュー内容を入れる">{{$menu->body}}</textarea>
        </div>
        <div>
            <input type="hidden" name="_method" value="patch">
            <input type="submit" value="更新">
        </div>
    </form>
@endsection