@extends('layouts.auth')

@section('title', 'Login')

@section('content')

<section class="section-border border-primary">'

     <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center no-gutters min-vh-100">
            

            <div class="col-12 col-md-5 col-lg-4 py-8 py-md-11">
            
                
                   <!-- Heading -->
                <h1 class="mb-4 font-weight-bold text-center">
                  Login
                </h1>

                 <!-- Text -->
                <p class="mb-6 text-center text-muted">
                  Welcome back, Login to proceed.
                </p>




                      <form class="mb-6" method="POST" action="{{ route($loginRoute) }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" >{{ __('E-Mail Address') }}</label>

                            
                                <input id="email" 
                                       type="email" 
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                       name="email" 
                                       value="{{ old('email') }}" 
                                       placeholder="hello@domain.com" 
                                       required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                            <div class="form-group">
                                <label for="password" >{{ __('Password') }}</label>

                                
                                    <input id="password" 
                                           type="password" 
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                           name="password" 
                                           placeholder="Enter your password"  required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>

                                    <button type="submit" class="btn btn-block btn-primary">
                                        {{ __('Login') }}
                                    </button>
                         

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link small-text" href="{{ route($forgotPasswordRoute) }}">
                                            <span class="mb-0 font-size-sm text-center">{{ __('Forgot Your Password?') }}</span>
                                        </a>
                                    @endif
                           

                               


                            <div class="mb-5 mt-5">
                                <hr>
                                <div class="mb-0 font-size-sm text-center text-muted">
                                    Don't have an account ?<a href="{{ route('register') }}"> Register</a>
                                </div>
                            </div>


                        </form>  

               </div>
        </div>
    </div>
</section>


@endsection
