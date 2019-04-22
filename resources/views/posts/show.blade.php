@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


<h1>{{$post->title}}</h1>

    <small>{{$post->created_at}} by {{$post->user['username']}} | {{$post->user['accountType']}}</small>

    <small>{{$post->user['username']}} is a {{$post->user['occupation']}} and is currently located at {{$post->user['locationphp']}}. Their rate per hour is {{$post->user['ratePerHour']}} in Philippine pesos.</small>

    <small>They specialize at</small>
    <small><ul>
        <li>{{$post->user['specialization1']}}</li>
        <li>{{$post->user['specialization2']}}</li>
        <li>{{$post->user['specialization3']}}</li>
    </ul></small>

    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}

    @if(Auth::user()->id == $post->user_id)

    <a href='/posts/{{$post->id}}/edit' class='btn btn-primary'>Edit</a>

        {{Form::hidden('_method', 'DELETE')}}

        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

    {!! Form::close()!!}

    @endif

    <hr>

    <div>
        <p><b>Specialization</b>: {{$post->specialization}}</p>
        <p><b>Status</b>: {{$post->status}}</p>

        <hr>

        <h5><b>{{$post->user['name']}}</b> wants to learn:</h5>

        <p>{!!$post->body!!}</p>

        <hr>

        @if(Auth::user()->id != $post->user_id)

        <a href="/chat"><p>Feeling confident? Send {{$post->user['name']}} a message about your proposal and start learning together!</p></a>

        @endif

    </div>

    <a href="/posts/" class="btn btn-primary">Go Back</a>

                </div>
            </div>
        </div>
    </div>

        
@endsection