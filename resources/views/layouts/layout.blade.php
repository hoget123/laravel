<html>
    <head>
         @yield('head')
    </head>
    <body>
        @section('sidebar')
            @yield('sidebar')
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>