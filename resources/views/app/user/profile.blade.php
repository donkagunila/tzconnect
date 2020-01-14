@extends('layouts.master')

@section('title', 'Profile | Tzconnect')

@section('page', 'Profile')

@section('content')



<div class="content">
	<div class="container-fluid">
		<div class="row">
		<div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="../../assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">{{ Auth::User()->name }}</h6>
                  <h4 class="card-title">{{ Auth::User()->email }}</h4>
                  <p class="card-description">
                    Hi there, Let's connect.
                  </p>
                 
                </div>
              </div>
            </div>
	</div>
	</div>
</div>

@endsection
