@extends('layouts.application')
@section('title', 'メニュー内容')
@section('content')
    <h1>{{$menu->name}}</h1>
    <p>{{$menu->body}}</p>
    <a href="/menus/{{$menu->id}}/edit">編集する</a>
    <a href="/menus">一覧に戻る</a>
@endsection