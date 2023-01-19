@extends('layouts.back_end.admin_design') 
@section('title','Manage Forms')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-users icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Forms
                    <div class="page-title-subheading">Manage Forms</div>
                </div>
            </div>
        </div>
          <!-- Displaying an error message when the form has provided wrong credintials -->  
        @if(Session::has('flash_message_error'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{!! session('flash_message_error') !!}</strong> 
            </div>
        @endif         
        @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{!! session('flash_message_success') !!}</strong> 
            </div>
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
                        <th style="text-align: center; text-transform: capitalize">First Name</th>
                        <th style="text-align: center; text-transform: capitalize">Last Name</th>
                        <th style="text-align: center; text-transform: capitalize">Program Name</th>
                        <th style="text-align: center; text-transform: capitalize">Email</th>
                        <th style="text-align: center; text-transform: capitalize">Phone Number</th>
                        <th style="text-align: center; text-transform: capitalize">District</th>
                        <th style="text-align: center; text-transform: capitalize">Submitted On</th>
                        <th style="text-align: center; text-transform: capitalize">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($forms as $form) 
                    <?php $i++; ?>
                      <tr class="gradeX">
                        <td style="text-align: center; text-transform: capitalize;"> {{ $form->first_name }}</td>
                        <td style="text-align: center; text-transform: capitalize;"> {{ $form->last_name }}</td>
                        <td style="text-align: center; text-transform: capitalize;">
                            @foreach($programs as $program)
                            @if($form->program_id == $program->id )
                                {{ $program->name }}
                            @endif
                            @endforeach
                        </td>
                        <td style="text-align: center;">{{ $form->email }}</td>
                        <td style="text-align: center;text-transform: capitalize;">{{ $form->phone_number }}</td>
                        <td style="text-align: center; text-transform: capitalize;">
                        @foreach($districts as $district)
                        @if($form->district_id == $district->id )
                            {{ $district->districtname }}
                        @endif
                        @endforeach
                        </td>
                        <td style="text-align: center; text-transform: capitalize;">{{ $form->created_at->diffForHumans() }}</td>
                        <td style="text-align: center; text-transform: capitalize;">
                            <a 
                                href="#Modal1{{ $form->id }}" 
                                data-toggle="modal" 
                                class="badge badge-success" 
                                data-target="#Modal1{{ $form->id }}">
                                Details
                            </a>
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
                        <h5 class="modal-title" id="exampleModalLongTitle">Delete Service Page Content</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <p class="btn-danger">
                                Are You Sure You Want to Delete?<br>
                                {{ $form->name }}<br>
                                {{ $form->description }}<br>
                                {{ $form->image }}<br>
                                
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="{{ url('/admin/form/delete/'.$form->id ) }}" class="btn btn-danger">Delete</a>
                        </div>
                        </div>
                        </div>
                    </div>
                <!-- Delete Edit Service Content -->


                <!-- View Details Content -->
                    <div class="modal fade" id="Modal1{{$form->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" style="width:90%">
                        <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">{{ $form->first_name}} {{ $form->last_name}} Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <p><b>Full Name</b>: {{$form->first_name}} {{$form->last_name}}
                            <b>Program Name</b>: 
                                @foreach($programs as $program)
                                @if($form->program_id == $program->id )
                                    {{ $program->name }}
                                @endif
                                @endforeach
                            <b>Phone</b>                       : {{$form->phone_number}}
                            </p>
                            <p><b>Alternative Phone Number</b>    : {{$form->alt_number}} 
                                <b>Email</b>                       : {{$form->email}}
                                <b>ID Number</b>                   : {{$form->id_number}}
                            </p>
                            <p><b>District</b>: 
                                @foreach($districts as $district)
                                @if($form->district_id == $district->id )
                                    {{ $district->districtname }}
                                @endif
                                @endforeach
                                <b>Date of Birth</b>                : {{$form->dob}}
                                <b>Employment</b>                   : {{$form->employment}} 
                            </p>
                            <p><b>Position</b>                   : {{$form->position}} </p>
                            <p><b>CV :</b>
                                @if(!empty($form->cv))
                                  <img src="{{ asset('images/registrations/'.$form->cv) }}" style="width:200px;">
                                @else
                                  <span style="color: red">Image Is Not Available</span>
                                @endif
                            </p>
                            <p><b>Certificate :</b>
                                @if(!empty($form->cv))
                                  <img src="{{ asset('images/registrations/'.$form->certificate) }}" style="width:200px;">
                                @else
                                  <span style="color: red">Image Is Not Available</span>
                                @endif
                                <b>Proof of Payment :</b>
                                @if(!empty($form->cv))
                                  <img src="{{ asset('images/registrations/'.$form->proof_of_payment) }}" style="width:200px;">
                                @else
                                  <span style="color: red">Image Is Not Available</span>
                                @endif
                            </p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Update"/>
                        </div>
                        </div>
                        </div>
                    </div>
                 <!-- End View Details Content -->

                      


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