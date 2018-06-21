@extends('layouts.master')

@section('contents')

        <div class="blog-post">
            <h2 class="blog-post-title">{{$post->title}}</h2>
            <p class="blog-post-meta">{{$post->created_at->diffForHumans()}} by <a href="#">Rob</a></p>

            {{$post->body}}

        </div><!-- /.blog-post -->

        <form method="post" action="/posts/{{$post->id}}/comment">

            {{csrf_field()}}

            <div class="form-group">
                <label for="body">Comment</label>
                <textarea id="body" class="form-control" name="body"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary form-control">Add Comment</button>
            </div>

            @include('layouts.errors')

        </form>


        <div class="comments">
            <ul class="list-group">
                @foreach ($post->comments->reverse() as $comment)
                    <li class="list-group">
                        <strong>
                            {{$comment->created_at->diffForHumans()}}: &nbsp; {{$comment->user->name}}
                        </strong>
                        {{$comment->body}}
                    </li>
                @endforeach
            </ul>
        </div>




@endsection