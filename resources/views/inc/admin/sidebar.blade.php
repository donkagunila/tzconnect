


 <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
     
      <div class="logo">
        <a href="{{ route('admin.home')}}" class="simple-text logo-mini">
          TC
        </a>
        <a href="{{ route('admin.home')}}" class="simple-text logo-normal">
          TZ Connect
        </a>
      </div>
      <div class="sidebar-wrapper">
        
        <ul class="nav">
          <li class="nav-item {{ Request::is('*/dashboard*') ? 'active' : ' '}}">
            <a class="nav-link" href="{{ route('admin.home')}}">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>
          
          <li class="nav-item {{ Request::is('*/user/*') ? 'active' : ''}}">
            <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
              <i class="material-icons">people</i>
              <p> Users
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="componentsExamples">
              <ul class="nav">
                
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('admin.user.list')}}">
                    <span class="sidebar-mini"> UL </span>
                    <span class="sidebar-normal"> User List </span>
                  </a>
                </li>


                 <li class="nav-item ">
                  <a class="nav-link" href="{{ route('admin.user.vendors')}}">
                    <span class="sidebar-mini"> VR </span>
                    <span class="sidebar-normal"> Vendor Requests </span>
                  </a>
                </li>


                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('admin.user.create')}}" >
                    <span class="sidebar-mini"> AU </span>
                    <span class="sidebar-normal"> Add User</span>
                  </a>
                </li>
               
              </ul>
            </div>
          </li>


           <li class="nav-item {{ Request::is('*/service/*') ? 'active' : ''}}">
            <a class="nav-link" data-toggle="collapse" href="#serviceCollapse">
              <i class="material-icons">room_service</i>
              <p> Services
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="serviceCollapse">
              <ul class="nav">
                
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('admin.service.transport')}}">
                    <span class="sidebar-mini"> T </span>
                    <span class="sidebar-normal"> Transport  </span>
                  </a>
                </li>


                 <li class="nav-item ">
                  <a class="nav-link" href="{{ route('admin.service.enternainment')}}">
                    <span class="sidebar-mini"> E </span>
                    <span class="sidebar-normal"> Entertainment </span>
                  </a>
                </li>


                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('admin.service.mc')}}" >
                    <span class="sidebar-mini"> M </span>
                    <span class="sidebar-normal"> Master Ceremonies</span>
                  </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('admin.service.hall')}}" >
                    <span class="sidebar-mini"> H </span>
                    <span class="sidebar-normal"> Halls </span>
                  </a>
                </li>
               
              </ul>
            </div>
          </li>

       


          <li class="nav-item {{ Request::is('*/event/*') ? 'active' : ''}}">
            <a class="nav-link" data-toggle="collapse" href="#eventsDropdown">
              <i class="material-icons">event</i>
              <p> Events
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="eventsDropdown">
              <ul class="nav">
                
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('admin.event.categories')}}">
                    <span class="sidebar-mini"> EC </span>
                    <span class="sidebar-normal"> Event Categories </span>
                  </a>
                </li>

                 <li class="nav-item ">
                  <a class="nav-link" href="{{ route('admin.event.all')}}">
                    <span class="sidebar-mini"> AE </span>
                    <span class="sidebar-normal"> All Events  </span>
                  </a>
                </li>



               
               
              </ul>
            </div>
          </li>

          <li class="nav-item {{ Request::is('*/servie/*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('admin.service.all')}}">
              <i class="material-icons">room_service</i>
              <p> Service Requests </p>
            </a>
          </li>


          <li class="nav-item {{ Request::is('*/servce/*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('admin.service.all')}}">
              <i class="material-icons">contact_support</i>
              <p> Subscriptions </p>
            </a>
          </li>


            <li class="nav-item {{ Request::is('*/sevice/*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('admin.service.all')}}">
              <i class="material-icons">chat</i>
              <p> Contacts </p>
            </a>
          </li>

          <li class="nav-item {{ Request::is('*/servie/*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('admin.service.all')}}">
              <i class="material-icons">image</i>
              <p> Images </p>
            </a>
          </li>

            <li class="nav-item {{ Request::is('*/email/*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('admin.service.all')}}">
              <i class="material-icons">email</i>
              <p> Email </p>
            </a>
          </li>


           <li class="nav-item {{ Request::is('*/pages/*') ? 'active' : ''}}">
            <a class="nav-link" data-toggle="collapse" href="#pageCollapse">
              <i class="material-icons">pageview</i>
              <p> Pages
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pageCollapse">
              <ul class="nav">
                
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('admin.service.transport')}}">
                    <span class="sidebar-mini"> AU </span>
                    <span class="sidebar-normal"> About Us  </span>
                  </a>
                </li>


                 <li class="nav-item ">
                  <a class="nav-link" href="{{ route('admin.service.enternainment')}}">
                    <span class="sidebar-mini"> CU </span>
                    <span class="sidebar-normal"> Contact Us </span>
                  </a>
                </li>


                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('admin.service.mc')}}" >
                    <span class="sidebar-mini"> TC </span>
                    <span class="sidebar-normal"> Terms and Conditions</span>
                  </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('admin.service.hall')}}" >
                    <span class="sidebar-mini"> P </span>
                    <span class="sidebar-normal"> Policy </span>
                  </a>
                </li>
               
              </ul>
            </div>
          </li>






          
        </ul>
      </div>
    </div>