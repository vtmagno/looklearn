@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <br>
                    <br>

    <h2><center>{{ Auth::user()->name }} | {{ Auth::user()->accountType }}</center></h2>
    <small><center>{{ Auth::user()->username }}</center></small>
    <br> 
        <hr>
    
    <u><b><h3>Contact Information</h3></b></u>
    <p>{{ Auth::user()->email }}</p>

        <hr>

    <u><b><h3>Other Information</h3></b></u>
    <p>Gender: {{ Auth::user()->gender }}</p>
    <p>Location: {{ Auth::user()->location }}</p>
    <p>Occupation: {{ Auth::user()->occupation }}</p>
    <p>Rate per Hour: {{ Auth::user()->ratePerHour }}</p>

    <p>Account type: {{ Auth::user()->occupation }}</p>





                </div>
            </div>
        </div>
    </div>


@endsection