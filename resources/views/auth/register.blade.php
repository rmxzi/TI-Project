@extends('layouts.app')

@section('content')

<div class="undermenuarea">
    <div class="boxedshadow">
        
    </div>
    <!-- SLIDER AREA
    ================================================== -->
    >
</div>
<!-- UNDER SLIDER - BLACK AREA
================================================== -->

<div class="shadowunderslider">
</div>
<!-- START content area
================================================== -->
<div class="grid" >
    <div class="row space-bot" >
        <div class="row space-top">
            <div class="c12 space-top">
                <h1 class="maintitle ">
                <span>SIGN UP...</span>
                </h1>
            </div>
        </div>
        
<div class="container"  style="background-color:#d1cfcf">

<div class="signupdiv"  >
@error('email')
    <span class="invalid-feedback" role="alert">
        <strong  style="padding:10px;background: wheat;color: red;" >{{ $message }}</strong>
    </span>
@enderror

      <form  style="border:0px" method="POST" action="{{ route('register') }}">
                        @csrf
                       
                       <div class="container" >
                        <p>Please fill in this form to create an account.</p>
                           <hr>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <p> Do you have an account ready? <a href="/login" style="color:dodgerblue">Login</a>.</p>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Sign Up
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
      
      
    </div>
    
  </div>
        <!--Box 1-->

    </div>
    <!-- SHOWCASE
    ================================================== -->

    <div class="row space-bot">
        <div class="c12">
            
        </div>
    </div>
    <!-- CALL TO ACTION 
    ================================================== -->
    
</div><!-- end grid -->



@endsection
