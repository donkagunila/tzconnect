@extends('layouts.admin')

@section('title', 'User List | Admin')

@section('content')


<div class="content">
	<div class="container-fluid">
		<div class="row">
			 <div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary card-header-icon">
					 <div class="card-icon">
	                    <i class="material-icons">people</i>
	                  </div>
	                  <h4 class="card-title">Create User</h4>
					</div>



					{{-- card body --}}

					<div class="card-body">
						
						
						    <form action="{{ route('admin.user.add')}}" method="POST">
						      
						      <div >
						          @csrf 

						           <div class="form-group">
						              <div class="input-group">
						                 <div class="input-group-prepend">
						                    <span class="input-group-text">
						                        <i class="material-icons">person</i>
						                    </span>
						                  </div>
						                  <input type="text" class="form-control" name="username" id="userName" placeholder="Username" required>
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
				{{-- end of card --}}
			 </div>
		</div>
	</div>
    
</div>
@endsection
