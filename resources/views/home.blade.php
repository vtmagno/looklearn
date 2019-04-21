@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="panel-body">
                    
                    <br>

                    <h3>Your Posts</h3>

                    <a href='/posts/create' class="btn btn-success btn-size">Create Post</a>

                    

                    @if(count($posts) > 0)

                    <br>
                    <br>

                        <table class="table table-striped">

                            <tr>

                                <th>Title</th>
                                <th></th>
                                <th></th>

                            </tr>

                            @foreach($posts as $post)

                            

                            <tr>

                                    <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                                    <th><a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-size">Edit</a></th>
                                    <th>    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}

                                            {{Form::hidden('_method', 'DELETE')}}
                                    
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger btn-size'])}}
                                    
                                        {!! Form::close()!!}</th>
        
                            </tr>

                            @endforeach


                        </table>
            
                    @else

                    <h5>You have no posts yet.</h5>
                    <p>Create one and start learning!</p>

                    @endif
                    
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
