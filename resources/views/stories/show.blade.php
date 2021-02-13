@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-8/12 rounded-lg bg-white p-6 mt-10">
        <div>
            {{ $story->title }}
            <a href=" {{ route('stories.index') }}" class="float-right">Back</a>
        </div>
        <div>
            {{ $story->body}}

            <div class="font-semibold">
                Status: {{ $story->status == 1 ? 'Active' : 'Deleted'}}
                Type: {{ $story->type }}
            </p>
        </div>
    </div>
</div>
@endsection
