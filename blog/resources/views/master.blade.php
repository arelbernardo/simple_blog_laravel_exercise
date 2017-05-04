<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('includes.styles')
        @include('includes.scripts')
    </head>
    <body>
        @include('includes.nav_bar')
        @yield('content')
    </body>
</html>