<div class="topnav"></div>
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white border-bottom">

  <div class="container">
      

        <!-- Brand -->
        <a class="navbar-brand" href="{{ route('index')}}">
          Tzconnect.
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-x"></i>
          </button>

          <!-- Navigation -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarLandings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu dropdown-menu-lg p-lg-0" aria-labelledby="navbarLandings">
                <div class="row mx-lg-0">
                  <div class="col-12 col-lg-6 p-lg-7 d-none d-lg-flex flex-column justify-content-center overlay overlay-primary overlay-80 bg-cover rounded-left" style="background-image: url({{ asset('assets/img/photos/photo-3.jpg') }});">
                    <div class="position-relative text-center text-white">

                      <!-- Heading -->
                      <h4 class="font-weight-bold mb-0">
                        Want to see all we have?
                      </h4>

                      <!-- Text -->
                      <p class="font-size-sm">
                        See all the services at once.
                      </p>

                      <!-- Button -->
                      <a href="{{ route('services.all')}} " class="btn btn-sm btn-white shadow-dark font-size-sm">
                        View all services
                      </a>
                  
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 p-lg-7">
                    <div class="row no-gutters">
                      <div class="col-6">

                        <!-- Heading -->
                        <h6 class="font-weight-bold text-uppercase text-primary">
                          Basic Services
                        </h6>

                        <!-- List -->
                        <ul class="list mb-5">
                          <li class="list-item">
                            <a class="list-link" href="{{ route('services.all')}}">
                              Decor
                            </a>
                          </li>
                          <li class="list-item mb-1">
                            <a class="list-link" href="{{ route('services.all')}}">
                              Catering
                            </a>
                          </li>
                          <li class="list-item">
                            <a class="list-link" href="{{ route('services.all')}}">
                              Music
                            </a>
                          </li>

                           <li class="list-item">
                            <a class="list-link" href="{{ route('services.all')}}">
                              Transport
                            </a>
                          </li>


                        </ul>

                       

                      </div>
                      <div class="col-6">
                    
                        <!-- Heading -->
                        <h6 class="font-weight-bold text-uppercase text-primary">
                          Custom Services
                        </h6>

                        <!-- List -->
                        <ul class="list mb-0">
                          <li class="list-item">
                            <a class="list-link" href="{{ route('services.all')}}">
                              Transport
                            </a>
                          </li>
                          
                        </ul>

                      </div>
                    </div> <!-- / .row -->
                  </div>
                </div> <!-- / .row -->
              </div>
            </li>
            
            
          </ul>

          <ul class="navbar-nav ml-auto">
             @if(Auth::guard('web')->check())
              
               <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>

                   <div class="dropdown-menu" aria-labelledby="navbarPages">
                      <div class="row no-gutters">
                        <div class="col-12">
                      
                          <!-- Heading -->
                          <h6 class="font-weight-bold text-uppercase text-primary">
                            Account
                          </h6>

                          <!-- List -->
                          <ul class="list">
                            <li class="list-item">
                              <a class="list-link" href="{{ route('profile')}}">
                                My profile
                              </a>
                            </li>
                            <li class="list-item">
                              <a class="list-link dropdown-item" style="padding-left: 0px    ;" href="#"
                                      onclick="event.preventDefault();
                                                      document.querySelector('#logout-form').submit();">Logout</a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                            </li>
                          </ul>
                        </div>
                        
                      </div>
                    </div> <!-- / .row -->
                </li>

              @else

              <li class="nav-item">
                  <a href="{{ route('login') }}" class="nav-link">Login</a>
              </li>

              <li class="navbar-btn ">
                  <a href="{{ route('register') }}" class="btn btn-sm btn-primary lift ml-auto">Register</a>
              </li>

              @endif
          </ul>

        </div>

      </div>
  
      
    </nav>
