@extends('layouts.app')

@section('content')

<h2 class="text-3xl font-bold mb-6">
    Feed LinkUp
</h2>

@foreach($posts as $post)

<div class="bg-white rounded-lg shadow p-6 mb-6">

    <div class="flex items-center gap-4">

        <img
            src="https://via.placeholder.com/60"
            class="rounded-full">

        <div>

            <h3 class="font-bold text-lg">

                {{ $post->user->name }}

            </h3>

            <p class="text-gray-500">

                Développeur Full Stack

            </p>

        </div>

    </div>

    <div class="mt-4">

        {{ $post->content }}

    </div>

</div>

@endforeach

@endsection
