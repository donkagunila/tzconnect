@extends('layouts.site')

@section('title', 'Services | Tzconect')

@section('description', 'Lets Connect, we bring together services, Events and Providers closer than ever')

@section('content')

<section class="border-bottom page-header header-filter">

	<div class="container">
		<div class="row">

			<div class="col-12 col-md-5 mt-10 py-10">
				<h1 class="display-3">
					Services.
				</h1>

				 <!-- Text -->
	            <p class="lead text-muted mb-3 mb-md-6">
	              Connect with the services you need, scroll or search below for your desired service
	            </p>
			</div>

			<div class="col-12 col-md-7">
				
			</div>
		</div>
	</div>
	
</section>


<main class="main-page">
	<div class="container">
		<div class="row py-4">
			<div class="col-12 col-md-4">

				{{-- the category card --}}
				<div class="card card-border card-border-xl border-primary">
					<div class="c-card-title">
						<p class="small-card-title">
					    	Services Categories
					    </p>
					    <span class="small-card-description text-muted">
					    	Below are the type of services available
					    </span>

					</div>

				    <div class="c-lists">
				    	<ul class="list-group">
				    		<li class="list-group-item">
				    			<a href="">
				    				Decor
				    			</a>
				    		</li>

				    		<li class="list-group-item">
				    			<a href="">
				    				Catering
				    			</a>
				    		</li>

				    		<li class="list-group-item">
				    			<a href="">
				    				Music
				    			</a>
				    		</li>

				    		<li class="list-group-item">
				    			<a href="">
				    				Transport
				    			</a>
				    		</li>
				    	</ul>	
				    </div>
					
				</div>

			</div>



			{{-- the display part --}}

			<div class="col-12 col-md-8">
				<div class="card">
					<div class="card-body">
						<div class="input-group mb-3">
						  <input type="text" class="form-control" placeholder="Search services" aria-label="Recipient's username" aria-describedby="button-addon2">
						  <div class="input-group-append">
						    <button class="btn btn-primary" type="button" id="button-addon2">
						    	<i class="fa fa-search"></i>
						    </button>
						  </div>
						</div>

						<hr class="mt-5">

						<a class="s-list mb-5" href="#">
							<div class="row">
								<div class="col-md-4">
									<div class="s-image">
										<img src="{{ asset('assets/img/photos/ph1.jpg')}}" alt="..." class="img-fluid">
									</div>
								</div>

								<div class="col-md-8">
									<div class="s-desc">
										<div class="s-top">
											
											<p class="s-title text-gray-900">
												Service title goes here
											</p>
											<span class="s-vendor text-muted small">
												Vendor's name
											</span>
										</div>

										<span class="t-desc text-gray-700">
											Lorem ipsum adipisicing elit adipisicing el adipisicing el. Perferendis temporibus veniam expedita esse, repellat in. Quis, dolorum nihil...
										</span>
									</div>
								</div>
							</div>
						
						<hr>
							
						</a>


						<div class="s-list mb-5">
							<div class="row">
								<div class="col-md-4">
									<div class="s-image">
										<img src="{{ asset('assets/img/photos/ph1.jpg')}}" alt="..." class="img-fluid">
									</div>
								</div>

								<div class="col-md-8">
									<div class="s-desc">
										<div class="s-top">
											
											<p class="s-title">
												Service title goes here
											</p>
											<span class="s-vendor text-muted small">
												Vendor's name
											</span>
										</div>

										<span class="t-desc">
											Lorem ipsum adipisicing elit adipisicing el adipisicing el. Perferendis temporibus veniam expedita esse, repellat in. Quis, dolorum nihil...
										</span>
									</div>
								</div>
							</div>
						
						<hr>
							
						</div>

						<div class="s-list mb-5">
							<div class="row">
								<div class="col-md-4">
									<div class="s-image">
										<img src="{{ asset('assets/img/photos/ph1.jpg')}}" alt="..." class="img-fluid">
									</div>
								</div>

								<div class="col-md-8">
									<div class="s-desc">
										<div class="s-top">
											
											<p class="s-title">
												Service title goes here
											</p>
											<span class="s-vendor text-muted small">
												Vendor's name
											</span>
										</div>

										<span class="t-desc">
											Lorem ipsum adipisicing elit adipisicing el adipisicing el. Perferendis temporibus veniam expedita esse, repellat in. Quis, dolorum nihil...
										</span>
									</div>
								</div>
							</div>
						
						<hr>
							
						</div>





					</div>
				</div>
			</div>
		</div>
	</div>
</main>

@endsection