@extends('layouts.layout')
 

 @section('title')
 Blog Posts
 @endsection
  
 
 @section('content')


  <title>{{ $post->title }}</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{!! nl2br(e($post->body)) !!}</p>
  </div>
</body>
@endsection