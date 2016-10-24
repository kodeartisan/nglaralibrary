<!DOCTYPE html>
<html>
    <head>
        <base href='/'>
        <title>Laravel5 + Angular2 application {{ app('env') }}</title>
        @if (App::environment('production'))
            <link rel="stylesheet" type="text/css" href="{{ elixir('css/all.css') }}">
        @else
            <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">
        @endif
    </head>
    <body>
      
    </body>
</html>
