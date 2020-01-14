@extends('layouts.admin')

@section('title', 'Transport Service | Admin')

@section('content')


<div class="content">
	<div class="container-fluid">
		<div class="row">
			 <div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-rose card-header-icon">
					 <div class="card-icon">
	                    <i class="fa fa-truck"></i>
	                  </div>
	                  <h4 class="card-title">Create Transport Service</h4>
					</div>



					{{-- card body --}}

					<div class="card-body">					
					    <form action="{{ route('admin.service.transport.add')}}" method="POST"> 
							@csrf 
							<div class="row">
								<div class="col-md-6">
									<div class="form-group label-floating">
										<label class="control-label" for="title">Service Tilte</label>
										<input type="text" class="form-control" id="title" name="title" >
									</div>
								</div>
							
							
								<div class="col-md-6">
									<div class="form-group">
									    <label class="control-label" for="exampleFormControlSelect1">Select Type</label>
									    <select name="type" class="form-control selectpicker" data-style="btn btn-link" id="exampleFormControlSelect1">
									        <option value="marriage">Marriage Services</option>
											<option value="construction">Construction Services</option>
											<option value="transit">Transit Services</option>
											<option value="funeral">Funeral Services</option>
											<option value="general">General </option>
									    </select>
									  </div>
								</div>
							</div>


							<div>
								<textarea class="textarea_editor form-control" name="description" rows="15" placeholder="Enter text ..." required></textarea>
							</div>

							<div>
								<button class="btn btn-rose">Create</button>
							</div>
						</form>
						    
						
					</div>
				</div>
				{{-- end of card --}}
			 </div>
		</div>
	</div>
    
</div>
@endsection
