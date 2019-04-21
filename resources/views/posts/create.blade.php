@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

    <h1>Create Post</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST'])!!}

        <div class="form-group">

            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

        </div>

        <div class="form-group">

                {{Form::label('specialization', 'Specialization')}}
                <br>
                {{Form::select('specialization', array('Mathematics' => 'Mathematics', 'Programming' => 'Programming', 'Science' => 'Science', 'English' => 'English',
                                                        'Photo and Video Editing' => 'Photo and Video Editing', 'Essay Writing' => 'Essay Writing'))}}
    
        </div>       

        <div class="form-group">

                {{Form::label('status', 'Status')}}
                <br>
                {{Form::select('status', array('Looking for Tutor' => 'Looking for Tutor', 'Tutor Found' => 'Tutor Found', 'Done' => 'Done', 'Cancelled' => 'Cancelled'))}}
    
        </div>    

        <div class="form-group">

                {{Form::label('body', 'What do you want to learn?')}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}

        </div>
        
    <br><br>
    {!! Form::submit('Submit', ['class'=>'btn btn-success btn-size']) !!}

    <a href="/posts/" class="btn btn-primary btn-size">Go Back</a>

    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection
