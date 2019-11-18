@extends('layouts.site')

@section('title', 'Login | Tzconnect')

@section('content')

<section>
    <div class="container">
        <div class="row no-gutters justify-content-between align-items-center min-vh-100 min-vh-100-ie-hack">
            <div class="col-12 col-md-5 align-self-stretch">

            <!-- Image (mobile) -->
                <img src="{{ asset('assets/site/img/photos/photo-5.jpg') }}" class="d-md-none img-cover" alt="...">

                <!-- Image -->
                <div class="d-none d-md-block vw-50 h-100 float-right bg-cover" style="background-image: url({{ asset('assets/img/photos/ph1.jpg') }});"></div>

              </div>

               <div class="col-12 col-md-6 py-8 py-md-11">
                 <!-- Heading -->
                    <h2 class="font-weight-bold text-center mb-1">
                      Login.
                    </h2>

                     <hr class="hr-sm my-4 my-md-6 border-gray-300">

                      <form method="POST" action="{{ route($loginRoute) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-12 col-form-label">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-12 col-form-label">{{ __('Password') }}</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                         

                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route($forgotPasswordRoute) }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>


                            <div class="mb-5 mt-5">
                                <hr>
                                <div class="text-center text-small">
                                    Don't have an account ?<a href="{{ route('register') }}"> Register</a>
                                </div>
                            </div>


                        </form>  

               </div>
        </div>
    </div>
</section>


@endsection
