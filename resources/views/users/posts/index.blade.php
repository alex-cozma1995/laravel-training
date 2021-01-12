@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-2 rounded-lg mt-10">
            <div class="text-2xl font-semibold">Posts from {{ $user->name }}</div>
            <p>{{ $user->name }} posted {{ $posts->count() }} times</p><hr />
            <div class="mt-10">
                @if($posts->count())
                    @foreach($posts as $post)
                        <x-post :post="$post" ></x-post>
                    @endforeach

                    {{ $posts->links() }}
                @else
                    <div>There are no posts yet</div>
                @endif
            </div>
        </div>
    </div>
@endsection()
