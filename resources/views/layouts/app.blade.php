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
                    <a href="{{ route('posts') }}">Posts</a>
                </li>
                <li>
                    <a href="{{ route('articles') }}">Articles</a>
                </li>
                <li>
                    <a href="{{ route('stories.index') }}">Stories</a>
                </li>
            </ul>
            <ul class="flex items-center space-x-5">
                @if (auth()->user())
                    <li>
                        <a href="">{{ auth()->user()->name }}</a>
                    </li>

                    <li>
                        <form action="{{ route('logout') }}" method="post" class="inline p-3">
                            @csrf

                            <button type="submit">Logout</button>
                        </form>
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
