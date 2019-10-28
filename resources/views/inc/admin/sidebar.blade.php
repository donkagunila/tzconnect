<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{ route('admin.user.add')}}" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          @csrf 

           <div class="form-group">
              <div class="input-group">
                 <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">person</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" name="name" id="userName" placeholder="Name" required>
              </div>
          </div>


          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">email</i>
                    </span>
                  </div>
              <input type="email" class="form-control" name="email" id="UserEmail" placeholder="Email Address" required>
            </div>
          </div>


          <div class="form-group">
           <div class="input-group">
              <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">security</i>
                    </span>
                  </div>
            <input type="password" class="form-control" name="password" id="userPassword" placeholder="Password" required>
          </div>
          </div>
          
           <div class="form-group form-check form-check-radio ml-5 mt-5">
            
                 <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="type" id="exampleRadios1" value="1" checked="true">
                    Normal User
                    <span class="circle">
                        <span class="check"></span>
                    </span>
                </label>

                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="type" id="exampleRadios1" value="2" >
                    Vendor
                    <span class="circle">
                        <span class="check"></span>
                    </span>
                </label>
          
            
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Create User</button>
      </div>
    </form>
    </div>
  </div>
</div> 


 <div class="sidebar" data-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
      -->
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
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">
                    <span class="sidebar-mini"> AU </span>
                    <span class="sidebar-normal"> Add User</span>
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

                {{--  <li class="nav-item ">
                  <a class="nav-link" href="{{ route('admin.user.list')}}">
                    <span class="sidebar-mini"> CE </span>
                    <span class="sidebar-normal"> Create Event </span>
                  </a>
                </li> --}}


               
               
              </ul>
            </div>
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