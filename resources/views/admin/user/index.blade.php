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
	                  <h4 class="card-title">All Users</h4>
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
			                          <th>Email</th>
			                          <th>Role</th>
			                          <th>Registered</th>
			                          <th>Status</th>
			                          <th class="disabled-sorting text-right">Actions</th>
			                        </tr>
			                      </thead>
			                      <tfoot>
			                        <tr>
			                          <th>Username</th>
			                          <th>Email</th>
			                          <th>Role</th>
			                          <th>Registered</th>
			                          <th>Status</th>
			                          <th class="text-right">Actions</th>
			                        </tr>
			                      </tfoot>
			                       <tbody>

			                       	@foreach($users as $user)
				                        <tr>
				                          <td>{{ $user->name}}</td>
				                          <td>{{ $user->email }}</td>
				                          <td>{{ App\User::checktype($user->type) }}</td>
				                          <td>{{ $user->created_at->toDateString() }}</td>
				                          <td>{{ App\User::checkstatus($user->status) }}</td>
				                          <td class="text-right">
				                            <a href="{{ route('admin.user.edit', $user->id)}}" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">edit</i></a>
				                            {{-- <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a> --}}
				                          </td>
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
