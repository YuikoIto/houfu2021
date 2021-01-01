<!DOCTYPE html>
<html>
  <head>
  @hasSection('title')
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta property="og:title" content="@yield('title') - {{ config('app.name') }}">
    @else
    <title>{{ config('app.name') }}</title>
    <meta property="og:title" content="{{ config('app.name') }}">
    @endif
    @hasSection('description')
    <meta name="description" content="@yield('description')">
    <meta property="og:description" content="@yield('description')">
    @else
    <meta name="description" content="2021年の抱負を投稿するサービスです">
    <meta property="og:description" content="2021年の抱負を投稿するサービスです">
    @endif
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="houfu">
    @hasSection('ogp')
    <meta property="og:image" content="@yield('ogp')">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="@yield('ogp')">
    @endif
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
  </head>
  <body>
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <div class="container" style="max-width: 600px">
      @yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>