@extends('layouts.admin')

@section('title', 'Event Categories | Admin')

@section('content')


<div class="content">
  <div class="container-fluid">
    <div class="row">
       <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
           <div class="card-icon">
                      <i class="material-icons">event</i>
                    </div>
                    <h4 class="card-title">Event Categories</h4>
          </div>



          {{-- card body --}}

          <div class="card-body">
            <div class="toolbar">
              
            </div>

            <div class="material-datatables">
              <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                 <thead>
                              <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Date Created</th>
                                <th>Status</th>
                                <th class="disabled-sorting text-right">Actions</th>
                              </tr>
                            </thead>
                            <tfoot>
                              <tr>
                               <th>Title</th>
                                <th>Description</th>
                                <th>Date Created</th>
                                <th>Status</th>
                                <th class="text-right">Actions</th>
                              </tr>
                            </tfoot>
                             <tbody>

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
