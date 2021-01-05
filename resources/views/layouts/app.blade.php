<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-200 p-10">
        <nav class="p-6 bg-white flex justify-between">
            <ul class="flex items-center space-x-5">
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="">Posts</a>
                </li>
            </ul>
            <ul class="flex items-center space-x-5">
                @if (auth()->user())
                    <li>
                        <a href="">Axl Foley</a>
                    </li>

                    <li>
                        <a href="">Logout</a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('register') }}">Register</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                @endif
            </ul>
        </nav>

        @yield('content')
    </body>
</html>
