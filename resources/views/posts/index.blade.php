@extends('app')

@section('content')
    <h1>Articles</h1>

    <hr/>

    @foreach ($posts as $post)
        <article>
            <h2>
                <a href="{{ url('/posts', $post->id) }}"> {{ $post->title }} </a>
            </h2>
            <div class="body"> {{ $post->body }} </div>
        </article>
    @endforeach
@stop