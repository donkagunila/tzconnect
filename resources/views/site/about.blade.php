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
		<div class="container">
			<section>
				<div class="about-services features-2">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title">We Connect the best</h2>
            <h5 class="description">We are a group of enthusiasts who came together to close the berrier between a customer and a service, we bring together all kinds of services related to events and ceremonies</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="info info-horizontal">
              <div class="icon icon-rose">
                <i class="material-icons">gesture</i>
              </div>
              <div class="description">
                <h4 class="info-title">1. Connect</h4>
                <p>we bring together all kinds of services related to events and ceremonies and get you the easiest way you can plan</p>
                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info info-horizontal">
              <div class="icon icon-rose">
                <i class="material-icons">build</i>
              </div>
              <div class="description">
                <h4 class="info-title">2. Develop</h4>
                <p>We develop a sense of belonging we bring together all kinds of services related to events and ceremonies</p>
               
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info info-horizontal">
              <div class="icon icon-rose">
                <i class="material-icons">mode_edit</i>
              </div>
              <div class="description">
                <h4 class="info-title">3. Inspire</h4>
                <p>we bring together all kinds of services related to events and ceremonies, with a tone of inspirations we give you the best</p>
               
              </div>
            </div>
          </div>
        </div>
      </div>
			</section>
		</div>
	</div>

	
@endsection