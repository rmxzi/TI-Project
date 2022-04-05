@extends('layouts.app')

@section('content')


                             
  

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">

                   
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
                <span>LOGIN...</span>
                </h1>
            </div>
        </div>
        
<div class="container"  style="background-color:#d1cfcf">

    <div class="logindiv"  >

 @error('email')
    <span class="invalid-feedback" role="alert">
        <strong  style="padding:10px;background: wheat;color: red;" >{{ $message }}</strong>
    </span>
@enderror


         <form method="POST" action="{{ route('login') }}">

                    <div class="imgcontainer" style=" text-align:center">
                      <img src="/front/images/img_avatar2.png" alt="Avatar" class="avatar">
                    </div>
                        @csrf
                       
                       <div class="container" >
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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












                </div>
            </div>
        </div>
    </div>
</div>
@endsection
