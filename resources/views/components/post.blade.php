@props(['post' => $post])

<div class="mb-2">
    <a href="{{ route('user.posts', $post->user) }}" class="font-semibold">{{ $post->user->username }} </a><span class="text-gray-600">{{ $post->created_at->diffForHumans() }}</span>
    <div class="mb-2">
        {{ $post->body }}
    </div>

    <div class="flex items-center">
        @auth
            @if(!$post->likedBy(auth()->user()))
                <form action="{{ route('posts.likes', $post->id) }}" method="post" class="mt-2 mr-2 mb-2">
                    @csrf
                    <button type="submit" class="text-blue-500">Like</button>
                </form>
            @else
                <form action="{{ route('posts.likes', $post->id) }}" method="post" class="mr-2 mt-2 mb-2">
                    @csrf
                    @METHOD('DELETE')
                    <button type="submit" class="text-blue-500">Unlike</button>
                </form>
            @endif
        @endauth
        <div>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</div>
    </div>
</div>
@can('delete', $post)
    <div>
        <form action="{{ route('posts.destroy', $post) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500">Delete</button>
        </form>
    </div>
@endcan
