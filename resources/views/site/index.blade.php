@extends('layouts.site')

@section('title', 'Home | Tzconect')

@section('description', 'Lets Connect, we bring together services, Events and Providers closer than ever')

@section('content')
	{{-- the landing pge --}}

	<div class="page-header header-filter" data-parallax="true" style="background-image: url({{ asset('assets/site/img/bg2.jpg') }}">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">
          	Let's Connect
          	 <span class="text-warning" data-toggle="typed" data-strings='["Finest Events", "Planners and Vendors", "Everything"]'></span>
          </h1>
          <h4>
          	All services and Events in Tanzania right at your finger tips, connect to get the best out of what Tanzania can offer, 
          	its easy, <br> Explore, locate, Utilize.
          </h4>
          <br>
          <a href="#" target="_blank" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-sign-in"></i> Get Started
          </a>
        </div>
      </div>
    </div>
  </div>




   <div class="main main-rased">
    <div class="container">
		<section class="py-8 py-md-11 bg-gradient-light border-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Badge -->
            <span class="badge badge-pill badge-primary-soft mb-3">
              <span class="h6 text-uppercase">Our blog</span>
            </span>

            <!-- Heading -->
            <h1>
              Stay up to date with the Industry.
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-7 mb-md-9">
              We share common trends and strategies for improving your event management, ways to get the best out of every service you need to make your dream event come to life.
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 d-flex">
            
            <!-- Card -->
            <a class="card text-reset text-decoration-none shadow-light-lg lift lift-lg mb-6 mb-lg-0" href="#!">

              <!-- Image -->
              <img src="{{ asset('assets/site/img/ph2.jpg') }}" alt="..." class="card-img-top">

              <!-- Body -->
              <div class="card-body">

                <!-- Heading -->
                <h3>
                  Events should appeal to a sense of adventure
                </h3>

                <!-- Text -->
                <p class="text-muted mb-5">
                  The ultimate guide to 'Event dressing', every piece for an event.
                </p>
                
                <!-- Meta -->
                <div class="row mt-auto pt-5 border-top">
                  <div class="col">
                    
                    <!-- Author -->
                    <h6 class="text-uppercase text-muted mb-0">
                      Donald Kagunila
                    </h6>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Date -->
                    <p class="h6 text-uppercase text-muted mb-0">
                      <time datetime="2019-08-02">Aug 17</time>
                    </p>

                  </div>
                </div> <!-- / .row -->
                
              </div>
            </a>

          </div>
           <div class="col-12 col-md-6 col-lg-4 d-flex">
            
            <!-- Card -->
            <a class="card text-reset text-decoration-none shadow-light-lg lift lift-lg mb-6 mb-lg-0" href="#!">

              <!-- Image -->
              <img src="{{ asset('assets/site/img/ph2.jpg') }}" alt="..." class="card-img-top">

              <!-- Body -->
              <div class="card-body">

                <!-- Heading -->
                <h3>
                  Events should appeal to a sense of adventure
                </h3>

                <!-- Text -->
                <p class="text-muted mb-5">
                  The ultimate guide to 'Event dressing', every piece for an event.
                </p>
                
                <!-- Meta -->
                <div class="row mt-auto pt-5 border-top">
                  <div class="col">
                    
                    <!-- Author -->
                    <h6 class="text-uppercase text-muted mb-0">
                      Donald Kagunila
                    </h6>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Date -->
                    <p class="h6 text-uppercase text-muted mb-0">
                      <time datetime="2019-08-02">Aug 17</time>
                    </p>

                  </div>
                </div> <!-- / .row -->
                
              </div>
            </a>

          </div>
         <div class="col-12 col-md-6 col-lg-4 d-flex">
            
            <!-- Card -->
            <a class="card text-reset text-decoration-none shadow-light-lg lift lift-lg mb-6 mb-lg-0" href="#!">

              <!-- Image -->
              <img src="{{ asset('assets/site/img/ph2.jpg') }}" alt="..." class="card-img-top">

              <!-- Body -->
              <div class="card-body">

                <!-- Heading -->
                <h3>
                  Events should appeal to a sense of adventure
                </h3>

                <!-- Text -->
                <p class="text-muted mb-5">
                  The ultimate guide to 'Event dressing', every piece for an event.
                </p>
                
                <!-- Meta -->
                <div class="row mt-auto pt-5 border-top">
                  <div class="col">
                    
                    <!-- Author -->
                    <h6 class="text-uppercase text-muted mb-0">
                      Donald Kagunila
                    </h6>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Date -->
                    <p class="h6 text-uppercase text-muted mb-0">
                      <time datetime="2019-08-02">Aug 17</time>
                    </p>

                  </div>
                </div> <!-- / .row -->
                
              </div>
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>
    </div>
  </div>


@endsection