@extends('layouts.admin')


@section('title', 'Dashboard | Admin')

@section('content')

   <div class="content">
  	<div class="content mt-30">
  		<div class="container-fluid">
    		<div class="row">
    		 <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">people</i>
              </div>
              <p class="card-category">Users</p>
              <h3 class="card-title">{{ App\Site::CountUsers() }}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-primary">add</i>
                <a href="{{ route('admin.user.create')}}" >Add Users</a>
              </div>
            </div>
          </div>
         </div>

         <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">people</i>
              </div>
              <p class="card-category">Users</p>
              <h3 class="card-title">{{ App\Site::CountUsers() }}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-primary">add</i>
                <a href="#" data-toggle="modal" data-target="#exampleModal">Add Users</a>
              </div>
            </div>
          </div>
         </div>

         <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">people</i>
              </div>
              <p class="card-category">Users</p>
              <h3 class="card-title">{{ App\Site::CountUsers() }}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-primary">add</i>
                <a href="#" data-toggle="modal" data-target="#exampleModal">Add Users</a>
              </div>
            </div>
          </div>
         </div>

         <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">people</i>
              </div>
              <p class="card-category">Users</p>
              <h3 class="card-title">{{ App\Site::CountUsers() }}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-primary">add</i>
                <a href="#" data-toggle="modal" data-target="#exampleModal">Add Users</a>
              </div>
            </div>
          </div>
         </div>
    	  </div>


        <div class="row">
          <div class="col-md-7">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">
                  Service Report
                </h4>
                <hr>
              </div>
            </div>
          </div>


          <div class="col-md-5">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">
                  Latest Posts
                </h4>

                <hr>

              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">
                  User Requests
                </h4>

                <hr>

                <div class="material-datatables">
                  <table class="table" id="datatables" cellspacing="0" width="100%" style="width:100%">
                    
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    	</div>
  	</div>
   </div>

@endsection
