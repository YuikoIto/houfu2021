<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
  </head>
  <body>
    @if (session('success'))
      <div class="success">
        {{ session('success') }}
      </div>
    @endif
    @yield('content')
  </body>
</html>