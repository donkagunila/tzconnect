@extends('layouts.auth')

@section('title', 'Password Reset')

@section('content')

<section class="section-border border-primary">

<div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center no-gutters min-vh-100">

        <div class="col-12 col-md-5 col-lg-4 py-8 py-md-11">

               <!-- Heading -->
                <h1 class="mb-4 font-weight-bold text-center">
                  {{ $title }}
                </h1>

                  <!-- Text -->
                <p class="mb-6 text-center text-muted">
                  Fill in your email address
                </p>



           
                

              
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="mb-6" method="POST" action="{{ route($passwordEmailRoute) }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" >{{ __('E-Mail Address') }}</label>

                       
                                <input id="email" 
                                       type="email" 
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                       name="email" 
                                       placeholder="hello@domaim.com" 
                                       value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        
                           
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>

                                <div class="mb-5 mt-5">
                                <hr>
                                <div class="mb-0 font-size-sm text-center text-muted">
                                    have an account? <a href="{{ route('login') }}">Login</a>
                                </div>
                            </div>
                            
                       
                    </form>
                
        

        </div>

    </div>
</div>

</section>
@endsection
