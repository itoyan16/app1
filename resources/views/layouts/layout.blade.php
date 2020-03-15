<html lang="ja">
<head>
  <meta charset="utf-8">
  {{-- タイトル設定 --}}
  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <div class="container">
  {{-- 本文 --}}
  @yield('content')
  </div>
</body>
</html>