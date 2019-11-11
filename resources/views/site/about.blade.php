@extends('layouts.site')

@section('title', 'About Us | Tzconect')

@section('description', 'Lets Connect, we bring together services, Events and Providers closer than ever')

@section('content')

	<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url({{ asset('assets/site/img/bg2.jpg') }});">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h1 class="title">About Us</h1>
          <h4>Meet the amaizing team behing this project, our story and why we do this.</h4>
        </div>
      </div>
    </div>
  </div>


  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <section class="py-8 py-md-11 border-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Headin -->
            <h1 class="display-2">
              Small team. Big hearts.
            </h1>

            <!-- Text -->
            <p class="lead text-muted mb-7 mb-md-9">
              Our focus is always on finding the best people to work with. Our bar is high, but you look ready to take on the challenge.
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">
            
            <!-- Image -->
            <div class="form-row">
              <div class="col-4">
                
                <img src="assets/img/photos/photo-16.jpg" class="img-fluid rounded shadow-lg" alt="...">

              </div>
              <div class="col-3">

                <img src="assets/img/photos/photo-17.jpg" class="img-fluid rounded shadow-lg mb-4" alt="...">

                <img src="assets/img/photos/photo-18.jpg" class="img-fluid rounded shadow-lg mt-1" alt="...">

              </div>
              <div class="col-5">

                <div class="form-row mb-4">
                  <div class="col-5">
                    
                    <img src="assets/img/photos/photo-19.jpg" class="img-fluid rounded shadow-lg" alt="...">

                  </div>
                  <div class="col-7">
                    
                    <img src="assets/img/photos/photo-20.jpg" class="img-fluid rounded shadow-lg" alt="...">

                  </div>
                </div> <!-- / .row -->

                <img src="assets/img/photos/photo-21.jpg" class="img-fluid rounded shadow-lg mt-1" alt="...">

              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>
        </div>
      </div>
    </div>
  </div>
	

	

	
@endsection