@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

    <h1>Posts</h1>

    <a href="/posts/create" class="btn btn-success">Create Post</a>

    <hr>

    @if(count($posts) > 1)

        @foreach($posts as $post)
            <div class="list-group-item">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Created at {{$post->created_at}} by {{$post->user['username']}}</small>
                <br><small>Specialization: {{$post->specialization}}</small>
                <br><small>Status: {{$post->status}}</small>
                <p>{!!$post->body!!}</p>
            </div>
        @endforeach

    @else
            <p>No posts found.</p>
    @endif

                </div>
            </div>
        </div>
    </div>


@endsection