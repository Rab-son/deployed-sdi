@extends('layouts.back_end.admin_design') 
@section('title','Manage Contact')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-users icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Contact
                    <div class="page-title-subheading">Manage Contact</div>
                </div>
            </div>
        </div>
          <!-- Displaying an error message when the form has provided wrong credintials -->  
        @include('layouts.back_end.message')
        @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{$error}}</strong> 
            </div>
        @endforeach
        @endif
    </div>
    <div class="row">
    <div class="col-md-12">
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="card mb-3">
                    <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Registration
                    </div>
                    </div>
                    <div class="card-body">
                    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                      <tr>
                        <th style="text-align: center; text-transform: capitalize">Email</th>
                        <th style="text-align: center; text-transform: capitalize">Created At</th>
                        <th style="text-align: center; text-transform: capitalize">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($newsletters as $form) 
                    <?php $i++; ?>
                      <tr class="gradeX">
                        <td style="text-align: center; text-transform: capitalize;"> {{ $form->email }}</td>
                        <td style="text-align: center; text-transform: capitalize;"> {{ $form->created_at->diffForHumans() }}</td>
                        <td style="text-align: center; text-transform: capitalize;">
                            <a
                                href="#Modal2{{ $form->id }}" 
                                data-toggle="modal" 
                                class="badge badge-danger" 
                                data-target="#Modal2{{ $form->id }}">
                                Delete
                            </a>
                        </td>
                      </tr>
           
                      
                    <!-- Delete Service Content -->
                    <div class="modal fade" id="Modal2{{$form->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Delete Content</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <p class="btn-danger">
                                Are You Sure You Want to Delete?<br>
                                {{ $form->name }}<br>
                                {{ $form->description }}<br>                                
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="{{ url('/newsletter/delete/'.$form->id ) }}" class="btn btn-danger">Delete</a>
                        </div>
                        </div>
                        </div>
                    </div>
                <!-- Delete Edit Service Content -->


                      


                    @endforeach
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> 

</div>



@endsection