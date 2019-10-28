@extends('layouts.admin')


@section('title', 'User Edit | Admin')

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
                  <h4 class="card-title">Edit User</h4>
              </div>


                <div class="card-body">
                  
                  <form action="{{ route('admin.user.update', $user->id)}}" method="POST">
                   
                    <div class="modal-body">
                        @csrf 

                         <div class="form-group">
                            <div class="input-group">
                               <div class="input-group-prepend">
                                  <span class="input-group-text">
                                      <i class="material-icons">person</i>
                                  </span>
                                </div>
                                <input type="text" class="form-control" name="name" id="userName" value="{{ $user->name }}" placeholder="Name" required>
                            </div>
                        </div>


                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend">
                                  <span class="input-group-text">
                                      <i class="material-icons">email</i>
                                  </span>
                                </div>
                            <input type="email" class="form-control" name="email" id="UserEmail" value="{{ $user->email }}" placeholder="Email Address" required>
                          </div>
                        </div>


                        
                         <div class="form-group form-check form-check-radio ml-5 mt-5">
                          
                               <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="type" id="exampleRadios1" value="1" {{ $user->type != 2 ? 'checked' : ''}}>
                                  Normal User
                                  <span class="circle">
                                      <span class="check"></span>
                                  </span>
                              </label>

                              <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="type" id="exampleRadios1" value="2" {{ $user->type === 2 ? 'checked' : ''}}>
                                  Vendor
                                  <span class="circle">
                                      <span class="check"></span>
                                  </span>
                              </label>
                        
                          
                        </div>


                    </div>
                    <div class="modal-footer">
                      <a class="btn btn-secondary" href="{{ route('admin.user.list')}}" >cancel</a>
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </form>

                </div>

              </div>
	          </div>
         </div>
      </div>
    </div>
@endsection
