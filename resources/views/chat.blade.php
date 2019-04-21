@extends('layouts.app-chat')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="panel-body" id="app">
                    
                    <h1>Your Messages</h1>
                    <chat-app user="\Auth::user()"></chat-app>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
