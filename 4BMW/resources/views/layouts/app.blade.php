
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>


        <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}"/>   

    </head>


    <body>

    	<header>
    		<h1>@yield('title')</h1>
    	</header>

        @section('nav')
          <nav class="mainNavbar">
            <ul>
              <li><a href="{{ url("/liste_motos") }}">Toute notre gamme</a></li>
              <li><a href="{{ url("/profile1") }}">Mon compte</a></li>
            </ul>
          </nav>
        @show

        <div class="container">
          @yield('content')
        </div>



    </body>
</html>