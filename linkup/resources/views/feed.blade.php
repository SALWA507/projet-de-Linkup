<h1>Feed LinkUp</h1>

@foreach($posts as $post)

    <h3>{{ $post->user->name }}</h3>

    <p>{{ $post->content }}</p>

    <hr>

@endforeach
