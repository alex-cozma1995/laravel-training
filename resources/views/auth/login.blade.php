@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class="w-4/12 rounded-lg bg-white p-6 mt-10">
            Login
            <hr />
            @if(session()->has('status'))
                <div class="border-red-500 mt-5 text-sm text-red-500">
                    {{ session('status') }}
                </div>
            @endif
            <form class="mt-5" method="post" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="sr-only">E-mail</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" placeholder="Email" />

                    @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" id="password" name="password" value="" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" placeholder="Password" />

                    @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 w-full text-white px-4 py-3 rounded">Login</button>
                </div>

            </form>
        </div>
    </div>

@endsection
