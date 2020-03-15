
@extends('layouts.layout')
 

@section('title')
Blog Posts
@endsection
 

@section('content')
<h1>
    <a href="{{ url('/posts/create') }}" class="header-menu">新規追加</a>
    Blog</h1>
    <ul>
      @forelse ($posts as $post)
      <li><a href="{{ action('PostsController@detail', $post) }}">{{ $post->title }}</a> 更新日時：{{$post->updated_at->format('Y年m月d日 H時i分')}}</li>
      @empty
      <li>データはありません。</li>
      @endforelse
    </ul>
</div>
    @endsection
  