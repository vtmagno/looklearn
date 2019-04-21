@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


<h1>{{$post->title}}</h1>

    <small>{{$post->created_at}} by {{$post->user['username']}}</small>

    <br>
    <br>

    

    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}

    <a href='/posts/{{$post->id}}/edit' class='btn btn-primary'>Edit</a>

        {{Form::hidden('_method', 'DELETE')}}

        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

    {!! Form::close()!!}

    <hr>

    <div>
        <p><b>Specialization</b>: {{$post->specialization}}</p>
        <p><b>Status</b>:{{$post->status}}</p>

        <hr>

        <h5><b>{{$post->user['username']}}</b> wants to learn:</h5>

        <p>{!!$post->body!!}</p>

        <hr>

        <a href="/email"><p>Feeling confident? Send {{$post->user['email']}} an email about your proposal and start learning together!</p></a>

    </div>

    <a href="/posts/" class="btn btn-primary">Go Back</a>

                </div>
            </div>
        </div>
    </div>

        
@endsection