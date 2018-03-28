<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chatty</title>
    <link rel="stylesheet" href="\css\bootstrap.min.css">
  </head>
  <body>
    @include('templates/partials.navigation')
      <div class="container">
        @include('templates.partials.alerts')
          @yield('content')
      </div>
  </body>
</html>
