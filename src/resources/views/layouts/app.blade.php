<!DOCTYPE html>
<html lang="ja">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/layouts/header.css') }}">
    <script src="{{ asset('js/header.js') }}" type="module"></script>
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    @yield('add_head')
  </head>
  <body>
    <div id="l-container" style="min-height: 100vh;">
      @include('layouts.header')
      <div id="l-page_content">
        @yield('content')
      </div>
    </div>
  </body>
</html>
