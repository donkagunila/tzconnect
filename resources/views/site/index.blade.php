@extends('layouts.site')

@section('title', 'Home | Tzconect')

@section('description', 'Lets Connect, we bring together services, Events and Providers closer than ever')

@section('content')
	{{-- the landing pge --}}

	<section data-jarallax data-speed=".8" class="pt-12 pb-10 pt-md-15 pb-md-14" style="background-image: url({{ asset('assets/site/img/bg2.jpg') }}">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-8 col-lg-6">
          <h1 class="display-3 font-weight-bold text-white" id="welcomeHeadingSource">
          	Let's Connect
            <br>
          	 Get <span class="text-warning" data-toggle="typed" data-strings='["Finest Events", "Vendors", "Event Services"]'></span>
          </h1>
          <p class="font-size-lg text-white-80 mb-6">
          	Tanzanian Services and Events at your finger tips, one dot to the other 
          </p>
          <form>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text pr-0 border-right-0">
                    <i class="fe fe-search" id="searchAddon"></i>
                  </span>
                </div>
                <input type="search" class="form-control pl-2 border-left-0" placeholder="Services, Events or Vendors.." aria-label="Search for a job" aria-describedby="searchAddon">
              </div>
            </form>
        </div>
      </div>
    </div>
  </section>




   <div class="main main-rased">
    <div class="container-fluid">

      {{-- process section --}}
            <!-- PROCESS
    ================================================== -->
    <section class="pt-8 pt-md-11">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-12 col-md-6">
            
            <!-- Preheading -->
            <h6 class="text-uppercase text-primary font-weight-bold">
              How it Works
            </h6>

            <!-- Heading -->
            <h2>
              Our process to help you with your event is fairly simple and fast.
            </h2>

            <!-- Text -->
            <p class="lead text-muted mb-6 mb-md-0">
              We keep everything as simple as possible by standardizing the application process for all services you need.
            </p>

          </div>
          <div class="col-12 col-md-6 col-xl-5">

            <div class="row no-gutters">
              <div class="col-4">
                
                <!-- Image -->
                <div class="w-150 mt-9 p-1 bg-white shadow-lg" data-aos="fade-up" data-aos-delay="100">
                  <img src="assets/img/photos/ph3.jpg" class="img-fluid" alt="...">
                </div>

              </div>
              <div class="col-4">
                
                <!-- Image -->
                <div class="w-150 p-1 bg-white shadow-lg" data-aos="fade-up">
                  <img src="assets/img/photos/ph1.jpg" class="img-fluid" alt="...">
                </div>

              </div>
              <div class="col-4 position-relative">
                
                <!-- Image -->
                <div class="w-150 mt-11 float-right p-1 bg-white shadow-lg" data-aos="fade-up" data-aos-delay="150">
                  <img src="assets/img/photos/ph2.jpg" class="img-fluid" alt="...">
                </div>

              </div>
            </div> <!-- / .row -->

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>


       <!-- STEPS
    ================================================== -->
    <section class="pt-8 pb-9 pt-md-11 pb-md-13">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="row">
              <div class="col-auto col-md-12">
                
                <!-- Step -->
                <div class="row no-gutters align-items-center mb-md-5">
                  <div class="col-auto">
                    
                    <a href="#!" class="btn btn-sm btn-rounded-circle btn-gray-400 disabled opacity-1">
                      <span>1</span>
                    </a>

                  </div>
                  <div class="col">
                    
                    <hr class="d-none d-md-block w-130">

                  </div>
                </div> <!-- / .row -->

              </div>
              <div class="col col-md-12 ml-n5 ml-md-0">
                
                <!-- Heading -->
                <h3>
                  Plan an event.
                </h3>

                <!-- Text -->
                <p class="text-muted mb-6 mb-md-0">
                  Have an event in mind that needs resources, can be anything from birthday parties to Marriages
                </p>

              </div>
            </div> <!-- / .row -->
          </div>
          <div class="col-12 col-md-4">
            <div class="row">
              <div class="col-auto col-md-12">
                
                <!-- Step -->
                <div class="row no-gutters align-items-center mb-md-5">
                  <div class="col-auto">
                    
                    <a href="#!" class="btn btn-sm btn-rounded-circle btn-gray-400 disabled opacity-1">
                      <span>2</span>
                    </a>

                  </div>
                  <div class="col">
                    
                    <hr class="d-none d-md-block w-130">

                  </div>
                </div> <!-- / .row -->

              </div>
              <div class="col col-md-12 ml-n5 ml-md-0">
                
                <!-- Heading -->
                <h3>
                  Select Services.
                </h3>

                <!-- Text -->
                <p class="text-muted mb-6 mb-md-0">
                  We will give you all the services you need at your disposal, search and the select the ones you need.
                </p>

              </div>
            </div> <!-- / .row -->
          </div>
          <div class="col-12 col-md-4">
            <div class="row">
              <div class="col-auto col-md-12">
                
                <!-- Step -->
                <div class="row no-gutters align-items-center mb-md-5">
                  <div class="col-auto">
                    
                    <a href="#!" class="btn btn-sm btn-rounded-circle btn-gray-400 disabled opacity-1">
                      <span>3</span>
                    </a>

                  </div>
                </div> <!-- / .row -->

              </div>
              <div class="col col-md-12 ml-n5 ml-md-0">
                
                <!-- Heading -->
                <h3>
                  Contact the Vendor
                </h3>

                <!-- Text -->
                <p class="text-muted mb-0">
                  Contact the vendor of the service, that's it, under a minute you have all services you need.
                </p>

              </div>
            </div> <!-- / .row -->
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>


       <!-- SHAPE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-light">
        <svg viewBox="0 0 1440 28" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0 28H1440C1440 28 1154 3.21961e-10 720 1.30487e-09C286 2.28777e-09 0 28 0 28Z" fill="currentColor"/>
        </svg>

      </div>
    </div>

    <section class="py-8 py-md-11 bg-gradient-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6">

            <!-- Preheading -->
            <h6 class="text-uppercase text-primary font-weight-bold">
              Our Services
            </h6>
            
            <!-- Heading -->
            <h2>
              Check out the Services we offer.
            </h2>

            <!-- Text -->
            <p class="text-muted mb-6 mb-md-8">
              From a great list of our vendors, we have curated a list of everything you can get for your event.
            </p>

          </div>
          <div class="col-12 col-md-6">
            
            <!-- Image -->
            

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-md-6">
            
            <!-- Card -->
            <div class="card card-border border-primary shadow-light-lg mb-6 mb-md-8" data-aos="fade-up">
              <div class="card-body">
                
                <!-- Heading -->
                <h6 class="text-uppercase text-primary d-inline-block mb-5 mr-1">
                  Catering and Bevarages 
                </h6>
                
              

                <!-- List group -->
                <div>
                  <div class="list-group list-group-flush">
                    <a class="list-group-item text-reset text-decoration-none" href="#!">

                      <p class="font-weight-bold mb-1">
                        Beef take away
                      </p>
                      <p class="font-size-sm text-muted mb-0">
                        Magau Catering, Dar es salaam
                      </p>

                    </a>
                    <a class="list-group-item text-reset text-decoration-none" href="#!">

                      <p class="font-weight-bold mb-1">
                        Beer Bucket Night
                      </p>
                      <p class="font-size-sm text-muted mb-0">
                        Kilimanjaro Lager, Dar es Salaam
                      </p>

                    </a>
                    
                  </div>
                </div>

              </div>
            </div>

            <!-- Card -->
            <div class="card card-border border-danger shadow-light-lg mb-6 mb-md-8" data-aos="fade-up">
              <div class="card-body">
                
                <!-- Heading -->
                <h6 class="text-uppercase text-danger d-inline-block mb-5 mr-1">
                  Transport 
                </h6>
                
                

                <!-- List group -->
                <div>
                  <div class="list-group list-group-flush">
                    <a class="list-group-item text-reset text-decoration-none" href="#!">

                      <p class="font-weight-bold mb-1">
                        Marriage ceremony Escort
                      </p>
                      <p class="font-size-sm text-muted mb-0">
                        Meliswa transportation, Arusha
                      </p>

                    </a>

                    


                    <a class="list-group-item text-reset text-decoration-none" href="#!">

                      <p class="font-weight-bold mb-1">
                        Coaster rental
                      </p>
                      <p class="font-size-sm text-muted mb-0">
                        Taqwa Express, Mwaanza
                      </p>

                    </a>


                  </div>
                </div>

              </div>
            </div>

          </div>
          <div class="col-12 col-md-6">
            
            <!-- Card -->
            <div class="card card-border border-success shadow-light-lg mb-6 mb-md-8" data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                
                <!-- Heading -->
                <h6 class="text-uppercase text-success d-inline-block mb-5 mr-1">
                  Halls 
                </h6>
                

                <!-- List group -->
                <div>
                  <div class="list-group list-group-flush">
                    <a class="list-group-item text-reset text-decoration-none" href="#!">

                      <p class="font-weight-bold mb-1">
                        Mwika Ceremonial Hall
                      </p>
                      <p class="font-size-sm text-muted mb-0">
                        Mwika Corportion,  Dar es salaam
                      </p>

                    </a>
                    <a class="list-group-item text-reset text-decoration-none" href="#!">

                      <p class="font-weight-bold mb-1">
                        Kigamboni BNN Resort
                      </p>
                      <p class="font-size-sm text-muted mb-0">
                        Mura LLC, Dar es Salaam
                      </p>

                    </a>

                    <a class="list-group-item text-reset text-decoration-none" href="#!">

                      <p class="font-weight-bold mb-1">
                        Mwika Ceremonial Hall
                      </p>
                      <p class="font-size-sm text-muted mb-0">
                        Mwika Corportion,  Dar es salaam
                      </p>

                    </a>
                    <a class="list-group-item text-reset text-decoration-none" href="#!">

                      <p class="font-weight-bold mb-1">
                        Kigamboni BNN Resort
                      </p>
                      <p class="font-size-sm text-muted mb-0">
                        Mura LLC, Dar es Salaam
                      </p>

                    </a>
                    
                    
                  </div>
                </div>

              </div>
            </div>

            <!-- Card -->
            <div class="card card-border border-gray-800 shadow-light-lg mb-6 mb-md-8" data-aos="fade-up">
              <div class="card-body">
                
                <!-- Heading -->
                <h6 class="text-uppercase text-gray-500 d-inline-block mb-5 mr-1">
                  Entertainment 
                </h6>
                

                <!-- List group -->
                <div>
                  <div class="list-group list-group-flush">
                    <a class="list-group-item text-reset text-decoration-none" href="#!">

                      <p class="font-weight-bold mb-1">
                        Ceremonial Music service
                      </p>
                      <p class="font-size-sm text-muted mb-0">
                        Eric Modest, Dar es salaam.
                      </p>

                    </a>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div> <!-- / .row -->
        <div class="row justify-content-center">
          <div class="col-12 col-md-6" data-aos="fade-up">
            
            <!-- Button -->
            <a href="#!" class="btn btn-block btn-primary d-flex align-items-center lift">
              View over 1,000 other services <i class="fe fe-arrow-right ml-auto"></i>
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>




   <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-light">
        <svg viewBox="0 0 1440 24" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0 24H1440V0C722.5 52 0 0 0 0V24Z" fill="currentColor"/>
        </svg>

      </div>
    </div>


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

    {{-- section 2 --}}

    </div>
  </div>


  <section data-jarallax data-speed=".8" class="py-12 py-md-14 overlay overlay-black overlay-80 jarallax" style="background-image: url({{ asset('assets/site/img/covers/cover-8.jpg') }};">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-1- col-lg-8 text-center">
            
            <!-- Heading -->
            <h1 class="text-white">
              Want to become a vendor?
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-white-80 mb-6 mb-md-8">
              We welcome service providers to share what they offer, Join to be able to post services and events, lets join forces, let's connect
            </p>

            <!-- Button -->
            <a href="#!" class="btn btn-pill btn-primary lift">
              Become a vendor <i class="fe fe-arrow-right ml-2"></i>
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>


@endsection