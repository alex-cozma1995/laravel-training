@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class="w-8/12 rounded-lg bg-white p-6 mt-10" id="app">
            <Articles></Articles>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
@endsection
