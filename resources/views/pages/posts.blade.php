@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <p>Look for a Tutor and start Learning!</p>

    @if(count($posts) > 0)

        @foreach($posts as $post)

        <ul class="list">
            <li class="list-group-item">
                {{$post}}
            </li>
        </ul>

        @endforeach

    @endif 

@endsection