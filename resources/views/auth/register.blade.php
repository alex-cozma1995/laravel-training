@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class="w-4/12 rounded-lg bg-white p-6 mt-10">
            Register
            <hr />
            <form class="mt-5" method="post" action="{{ route('register') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" placeholder="Your name" />

                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" id="username" name="username" value="{{ old('username') }}" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" placeholder="Your username" />

                    @error('username')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

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

                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Confirm password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" value="" class="bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="Confirm password" />

                </div>

                <div>
                    <button type="submit" class="bg-blue-500 w-full text-white px-4 py-3 rounded">Register</button>
                </div>

            </form>
        </div>
    </div>

@endsection
