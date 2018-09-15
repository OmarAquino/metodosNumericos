<!DOCTYPE html>
<html>
    <head>
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Métodos numéricos @yield('title')</title>
    </head>
    <body>
        @yield('content')
    </body>
</html>