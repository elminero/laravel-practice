@extends('layouts.master')

@section('contents')

    <form action="/posts/create" method="post">

        {{csrf_field()}}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" class="form-control" name="title">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea id="body" class="form-control" name="body"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Post It !</button>
        </div>

        @include('layouts.errors')

    </form>

@endsection



