@extends('layouts.admin')

@section('title', 'Transport List | Admin')

@section('content')


<div class="content">
	<div class="container-fluid">
		<div class="row">


			<div class="col-md-12"> 
				<div class="row">
					<div class="col-md-8">
			            <h4 class="page-title">
			            	<b>
			            		Transport Services
			            	</b>
			            </h4>
			            <p>
			            	View and create Transport services
			            </p>
					</div>

					<div class="col-md-4">
						<a 
						  href="{{ route('admin.service.transport.create')}}"
						  class="btn btn-outline-secondary float-right">
						  <span>
						  	+
						  </span>
							Create New
						</a>
					</div>
				</div>  
			</div>


			 <div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-rose card-header-icon">
					 <div class="card-icon">
	                    <i class="fa fa-truck"></i>
	                  </div>
	                  <h4 class="card-title">Transport Services</h4>
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
			                          <th>Registered</th>
			                          <th>Status</th>
			                          
			                        </tr>
			                      </thead>
			                      <tfoot>
			                        <tr>
			                          <th>Username</th>
			                          <th>Title</th>
			                          <th>Registered</th>
			                          <th>Status</th>
			                          
			                        </tr>
			                      </tfoot>
			                       <tbody>

			                       	@foreach($transports as $transport)
				                        <tr>
				                          <td>{{ $transport->user_id }}</td>
				                          <td>{{ $transport->type }}</td>
				                          <td>{{ $transport->created_at->toFormattedDateString() }}</td>
				                          <td>{{ App\Transport::checkstatus($transport->status) }}</td>
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
