<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Portal Primakara</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('additional-styles')
  </head>
  <body>
    <div class="wrapper">
      @yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('additional-scripts')
  </body>
</html>
