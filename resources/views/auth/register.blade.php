@extends('layouts.auth')

@section('title', 'Register')

@section('content')

<section class="section-border border-primary">
    
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center no-gutters min-vh-100">
            

            <div class="col-12 col-md-5 col-lg-4 py-8 py-md-11">
            
                
                   <!-- Heading -->
                <h1 class="mb-0 font-weight-bold text-center">
                  Register
                </h1>

                <!-- Text -->
                <p class="mb-6 text-center text-muted">
                  connect with all services in minutes.
                </p>


                      

                
                    <form class="mb-6" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="username">{{ __('Username') }}</label>

                           
                            <input id="username" 
                                   type="text" 
                                   class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" 
                                   name="username" 
                                   value="{{ old('username') }}" 
                                   placeholder="Enter your Username" 
                                   required autofocus>

                            @if ($errors->has('username'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                            
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>

                                <input id="email" 
                                       type="email" 
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                       name="email" 
                                       value="{{ old('email') }}" 
                                       placeholder="name@address.com" 
                                       required>

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
                                       placeholder="Enter your Password"
                                       required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('Register') }}
                                </button>
                           
                    </form>

                             <!-- Text -->
                    <p class="mb-0 font-size-sm text-center text-muted">
                      Have an account ? <a href="{{ route('login') }}">Login</a>.
                    </p>
                
            </div>
    

        </div>
    </div>
</section>


@endsection
