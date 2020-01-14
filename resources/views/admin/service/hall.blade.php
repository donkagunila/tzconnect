@extends('layouts.admin')

@section('title', 'Mc List | Admin')

@section('content')


<div class="content">
	<div class="container-fluid">
		<div class="row">
			 <div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary card-header-icon">
					 <div class="card-icon">
	                    <i class="material-icons">house</i>
	                  </div>
	                  <h4 class="card-title">All Hall Services</h4>
					</div>



					{{-- card body --}}

					<div class="card-body">
						<div class="toolbar">
							
						</div>

						<div class="material-datatables">
							<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
								 <thead>
			                        <tr>
			                          <th>Username</th>
			                          <th>Title</th>
			                          <th>Location</th>
			                          <th>Size</th>
			                          <th>Price</th>
			                          <th>Registered</th>
			                          <th>Status</th>
			                        </tr>
			                      </thead>
			                      <tfoot>
			                        <tr>
			                          <th>Username</th>
			                          <th>Title</th>
			                          <th>Location</th>
			                          <th>Size</th>
			                          <th>Price</th>
			                          <th>Registered</th>
			                          <th>Status</th>
			                        </tr>
			                      </tfoot>
			                       <tbody>

			                       	@foreach($halls as $hall)
				                        <tr>
				                          
				                        </tr>
				                     @endforeach
				                    </tbody>
							</table>
						</div>
					</div>
				</div>
				{{-- end of card --}}
			 </div>
		</div>
	</div>
    
</div>
@endsection
