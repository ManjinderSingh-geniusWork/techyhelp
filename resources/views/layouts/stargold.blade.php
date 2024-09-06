<!DOCTYPE html>
 

<html>
    <head>
        <title>Techy Help - @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite(['resources/css/stargold.css'])
    </head>
    <body>
        @section('sidebar')
            
        @show
 
        <div class="container">
            @yield('content')
        </div>
        <div class ="fotter" style="position: fixed;right: 0;bottom: 0;">
            <span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=4wlxWSyNRXGjBL5IfQ2W3dePmw3ZZSatVOUWsO9ntWE42qdpL65xJfGVqiN0"></script></span>
        </div>
    </body>
</html>
