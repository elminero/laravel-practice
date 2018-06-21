@extends('layouts.master')

@section('features')
    @include('layouts.top-featured')

    <div class="row mb-2">

        @include('layouts.left-featured')

        @include('layouts.right-featured')

    </div>
@endsection

@section('contents')

@foreach($posts as $post)

    <div class="blog-post">
        <h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
        <p class="blog-post-meta">{{$post->created_at->diffForHumans()}} by <a href="#">{{$post->user->name}}</a></p>

        {{$post->body}}

    </div><!-- /.blog-post -->

@endforeach

<nav class="blog-pagination">
    <a class="btn btn-outline-primary" href="#">Older</a>
    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
</nav>

@endsection