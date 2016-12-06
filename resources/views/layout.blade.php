<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
  </head>
  <body>
    @yield('content')

    @yield('footer')
  </body>
</html>
