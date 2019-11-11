@extends('layouts.auth')

@section('content')

<div class="wrapper wrapper-full-page">
     <div class="page-header register-page header-filter" filter-color="black" style="background-image: url('../../assets/img/register.jpg')">
             <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <div class="card card-signup">
                            <h2 class="card-title text-center mt-10">{{ $title }}</h2>

                            <div class="card-body">
                                <div class="row">
                                   {{--  <div class="col-md-5 ml-auto">
                                        <div class="info info-horizontal">
                                          <div class="icon icon-rose">
                                            <i class="material-icons">timeline</i>
                                          </div>
                                          <div class="description">
                                            <h4 class="info-title">Browse Services</h4>
                                            <p class="description">
                                              See lists of services available for your events, be it a wedding, Seminar, Concert and many more, Get on board
                                            </p>
                                          </div>
                                        </div>
                                    </div>

 --}}

                                    <div class="col-md-12 ml-auto">
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
                        </div>
                    </div>
                </div>
            </div>
     </div>
</div>

@endsection
