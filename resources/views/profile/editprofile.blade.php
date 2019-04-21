@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('/editprofile') }}">
                        @csrf

                        <!-- ------------------------------------------- ACCOUNT TYPE ------------------------------------------- -->

                        <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Account Type') }}</label>
    
                                <div class="col-md-6">
                                        <div class="radio">
                                                <label><input type="radio" name="accountType" value="Tutor">Tutor</label>
                                              </div>
                                              <div class="radio">
                                                <label><input type="radio" name="accountType" value="Student">Student</label>
                                              </div>
    
                                    @if ($errors->has('accountType'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('accountType') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        <!-- ------------------------------------------- USERNAME ------------------------------------------- -->

                        <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
    
                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>                            

                        <!-- ------------------------------------------- NAME ------------------------------------------- -->

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- ------------------------------------------- EMAIL ------------------------------------------- -->

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- ------------------------------------------- PASSWORD AND CONFIRM PASSWORD ------------------------------------------- -->

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- ------------------------------------------- BIRTHDAY ------------------------------------------- -->

                        <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Birthday') }}</label>
    
                                <div class="col-md-6">
                                        <input type="date" name="birthday">
    
                                    @if ($errors->has('birthday'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('birthday') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        <!-- ------------------------------------------- Gender ------------------------------------------- -->

                        <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
    
                                <div class="col-md-6">
                                        <div class="radio">
                                                <label><input type="radio" name="gender" value="Male">Male</label>
                                              </div>
                                              <div class="radio">
                                                <label><input type="radio" name="gender" value="Female">Female</label>
                                              </div>
                                              <div class="radio">
                                                <label><input type="radio" name="gender" value="Would rather not say">Would rather not say</label>
                                                </div>
    
                                    @if ($errors->has('gender'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        <!-- ------------------------------------------- LOCATION ------------------------------------------- -->

                        <div class="form-group row">
                                <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>
    
                                <div class="col-md-6">
                                    <input id="location" type="location" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" value="{{ old('location') }}" required autocomplete="location">
    
                                    @if ($errors->has('location'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('location') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        <!-- ------------------------------------------- OCCUPATION ------------------------------------------- -->

                        <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Occupation') }}</label>
    
                                <div class="col-md-6">
                                    <input id="occupation" type="text" class="form-control{{ $errors->has('occupation') ? ' is-invalid' : '' }}" name="occupation" value="{{ old('occupation') }}" required autocomplete="occupation" autofocus>
    
                                    @if ($errors->has('occupation'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('occupation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        <!-- ------------------------------------------- RATE PER HOUR ------------------------------------------- -->

                        <div class="form-group row">
                                <label for="ratePerHour" class="col-md-4 col-form-label text-md-right">{{ __('Desired rate per hour, in PHP') }}</label>
    
                                <div class="col-md-6">
                                    <input id="ratePerHour" type="text" class="form-control{{ $errors->has('ratePerHour') ? ' is-invalid' : '' }}" name="ratePerHour" value="{{ old('ratePerHour') }}" required autocomplete="ratePerHour" autofocus>
    
                                    @if ($errors->has('ratePerHour'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ratePerHour') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        <!-- ------------------------------------------- SPECIALIZATIONS ------------------------------------------- -->

                        <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Specializations') }}<br><small>Choose three:</small></label>
    
                                

                                <div class="col-md-6">
                                        {{Form::select('specialization1', array('Mathematics' => 'Mathematics', 'Programming' => 'Programming', 'Science' => 'Science', 'English' => 'English',
                                        'Photo and Video Editing' => 'Photo and Video Editing', 'Essay Writing' => 'Essay Writing'))}}

                                        {{Form::select('specialization2', array('Mathematics' => 'Mathematics', 'Programming' => 'Programming', 'Science' => 'Science', 'English' => 'English',
                                        'Photo and Video Editing' => 'Photo and Video Editing', 'Essay Writing' => 'Essay Writing'))}}

                                        {{Form::select('specialization3', array('Mathematics' => 'Mathematics', 'Programming' => 'Programming', 'Science' => 'Science', 'English' => 'English',
                                        'Photo and Video Editing' => 'Photo and Video Editing', 'Essay Writing' => 'Essay Writing'))}}
    
                                    @if ($errors->has('specialization1'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('specialization1') }}</strong>
                                        </span>
                                    @endif

                                    @if ($errors->has('specialization2'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('specialization2') }}</strong>
                                    </span>
                                    @endif

                                    @if ($errors->has('specialization3'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('specialization3') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
