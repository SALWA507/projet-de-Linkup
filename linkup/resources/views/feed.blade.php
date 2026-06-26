@extends('layouts.app')

@section('content')

<h2 class="text-3xl font-bold mb-8">
    Fil d'actualité
</h2>

@foreach($posts as $post)

<div class="bg-white rounded-xl shadow mb-6 p-6">

    <div class="flex items-center">

        <img
            src="{{ $post->user->image_url }}"
            class="w-14 h-14 rounded-full object-cover">

        <div class="ml-4">

            <h3 class="font-bold text-lg">

                {{ $post->user->name }}

            </h3>

            <p class="text-gray-500">

                {{ $post->user->headline }}

            </p>

            <p class="text-sm text-gray-400">

                {{ $post->user->company }}

            </p>

        </div>

    </div>

    <div class="mt-6 text-gray-700">

        {{ $post->content }}

    </div>

</div>

@endforeach

@endsection
