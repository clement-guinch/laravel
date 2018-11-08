<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <main>
          @include('template.sidebar')
          @yield('content')
        </main>
    </body>
 <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
</html>
