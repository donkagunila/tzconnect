  <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{ route('index') }} ">
          TzConnect </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="nav-link">
              <i class="material-icons">apps</i> Services
            </a>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">view_day</i> Vendors
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="#" class="dropdown-item">
                <i class="material-icons">dns</i> Catering
              </a>
              <a href="#" class="dropdown-item">
                <i class="material-icons">build</i> Halls and Decoration
              </a>
              <a href="#" class="dropdown-item">
                <i class="material-icons">list</i> Entertainment
              </a>
             
            </div>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">view_carousel</i> Events
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="#" class="dropdown-item">
                <i class="material-icons">account_balance</i> Corporate events
              </a>
              <a href="#" class="dropdown-item">
                <i class="material-icons">art_track</i> Individuals
              </a>
              <a href="#" class="dropdown-item">
                <i class="material-icons">view_quilt</i> Archive
              </a>
            </div>
          </li>
          
        </ul>

        <ul class="navbar-nav ml-auto">

           @if(Auth::guard('web')->check())
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::guard('web')->user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="{{route('home')}}" class="dropdown-item">Dashboard</a>
                            <a class="dropdown-item" href="#"
                                onclick="event.preventDefault();
                                                document.querySelector('#logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="button-container nav-item iframe-extern">
                      
                        <a class="btn btn-rose btn-round btn-block" href="{{ route('register') }}">
                          <i class="icofont-login"></i> 
                        Register
                      </a>
                    </li>
                @endif
          
        </ul>
      </div>
    </div>
  </nav>