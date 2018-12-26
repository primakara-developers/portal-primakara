<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Primakara Student Information Site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('additional-styles')
  </head>
  <body>
    <div class="wrapper">
        @include('client.partials.header')
        @yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('additional-scripts')
  </body>
</html>
