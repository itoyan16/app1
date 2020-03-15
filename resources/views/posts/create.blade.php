@extends('layouts.layout')
 

@section('title', '新規登録')
 

@section('content')
<h1>
  <a href="{{ url('/') }}" class="header-menu">戻る</a>
  新規登録
</h1>
<form method="post" action="{{ url('/posts') }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="title" placeholder="タイトル">
  </p>
  <p>
    <textarea name="body" placeholder="本文"></textarea>
  </p>
  <p>
    <input type="submit" value="登録">
  </p>
</form>
@endsection