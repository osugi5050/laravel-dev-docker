@extends('layouts.application')
@section('title', 'メニューリスト')
@section('content')
    <div>
        <a href="/menus/create">新規作成</a>
    </div>
    @foreach ($menus as $menu)
        <h2>{{$menu->name}}</h2>
        <p><a href="/menus/{{$menu->id}}">{{$menu->body}}</a></p>
        <p><a href="/menus/{{$menu->id}}/edit">編集する</a></p>
        <form action="/menus/{{$menu->id}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="delete">
            <input type="submit" name="" value="削除する">
        </form>
        <hr />
    @endforeach
@endsection