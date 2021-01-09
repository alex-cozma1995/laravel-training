@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class="w-8/12 rounded-lg bg-white p-6 mt-10">
            <form action="{{ route('posts') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="body" class="sr-only"></label>
                    <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="Post something!"></textarea>

                    @error('body')
                        <div class="text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror

                    <div>
                        <button type="submit" class="bg-blue-500 mt-5 text-white px-4 py-2 font-medium rounded">Post</button>
                    </div>

                </div>
            </form>

            <div>
                @if($posts->count())
                    @foreach($posts as $post)
                        <div class="mb-4">
                            <a href="" class="font-semibold">{{ $post->user->username }} </a><span class="text-gray-600">{{ $post->created_at->diffForHumans() }}</span>
                            <div class="mb-2">
                                {{ $post->body }}
                            </div>
                        </div>
                    @endforeach
                @else
                    <div>There are no posts yet</div>
                @endif
            </div>
        </div>
    </div>

@endsection
