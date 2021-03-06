

 <div class="sidebar" data-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
      -->
      <div class="logo">
        <a href="{{ route('home')}}" class="simple-text logo-mini">
          TC
        </a>
        <a href="{{ route('home')}}" class="simple-text logo-normal">
          TZ Connect
        </a>
      </div>
      <div class="sidebar-wrapper">
        
        <ul class="nav">
          <li class="nav-item {{ Request::is('*home*') ? 'active' : ' '}}">
            <a class="nav-link" href="{{ route('home')}}">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>

           <li class="nav-item {{ Request::is('*events*') ? 'active' : ' '}}">
            <a class="nav-link" href="{{ route('home')}}">
              <i class="fa fa-calendar-o"></i>
              <p>My Events</p>
            </a>
          </li>

           <li class="nav-item {{ Request::is('*vendors*') ? 'active' : ' '}}">
            <a class="nav-link" href="{{ route('home')}}">
              <i class="fa fa-eercast"></i>
              <p> Vendors </p>
            </a>
          </li>

           <li class="nav-item {{ Request::is('*services*') ? 'active' : ' '}}">
            <a class="nav-link" href="{{ route('home')}}">
              <i class="fa fa-server"></i>
              <p> Services </p>
            </a>
          </li>



           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
              <i class="material-icons">people</i>
              <p> Services
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="componentsExamples">
              <ul class="nav">
                
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('admin.user.list')}}">
                    <span class="sidebar-mini"> CS </span>
                    <span class="sidebar-normal"> Create Service </span>
                  </a>
                </li>


                 <li class="nav-item ">
                  <a class="nav-link" href="{{ route('admin.user.vendors')}}">
                    <span class="sidebar-mini"> SR </span>
                    <span class="sidebar-normal"> Service List </span>
                  </a>
                </li>

               
              </ul>
            </div>
          </li>

          


           <li class="nav-item active-pro">
                <a class="nav-link" href="">
                    <i class="fa fa-link"></i>
                    <p>Become a vendor</p>
                </a>
            </li>
          
        



          {{--   <li class="nav-item {{ Request::is('*/event/*') ? 'active' : ''}}">
            <a class="nav-link" data-toggle="collapse" href="#eventsDropdown">
              <i class="material-icons">grain</i>
              <p> Services
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="eventsDropdown">
              <ul class="nav">
                
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('admin.service.all')}}">
                    <span class="sidebar-mini"> EC </span>
                    <span class="sidebar-normal">All Services </span>
                  </a>
                </li>


                 <li class="nav-item ">
                  <a class="nav-link" href="{{ route('admin.user.list')}}">
                    <span class="sidebar-mini"> CE </span>
                    <span class="sidebar-normal"> Create Event </span>
                  </a>
                </li>


               
               
              </ul>
            </div>
          </li>
          --}}
        </ul>
      </div>
    </div>