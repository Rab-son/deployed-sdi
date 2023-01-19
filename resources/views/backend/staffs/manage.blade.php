@extends('layouts.back_end.admin_design') 
@section('title','Manage Teams')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-users icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Teams
                    <div class="page-title-subheading">Manage Teams</div>
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
                        <th style="text-align: center; text-transform: capitalize">Photo</th>
                        <th style="text-align: center; text-transform: capitalize">Name</th>
                        <th style="text-align: center; text-transform: capitalize">Email</th>
                        <th style="text-align: center; text-transform: capitalize">Position</th>
                        <th style="text-align: center; text-transform: capitalize">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <a href="#exampleModalCenter" data-toggle="modal" data-target=".bd-example-modal-lg" class="badge badge-primary pull-right">Add</a><br><br>
                    @foreach ($teams as $form) 
                    <?php $i++; ?>
                      <tr class="gradeX">
                        <td style="text-align: center; text-transform: capitalize;"> 
                            @if(!empty($form->image))
                            <img src="{{ asset('images/admins/'.$form->image) }}" style="width:200px;">
                          @else
                            <img src="{{ asset('images/defaults/team.jpeg') }}" style="width:200px;">
                          @endif
                        </td>
                        <td style="text-align: center; text-transform: capitalize;"> {{ $form->name }}</td>
                        <td style="text-align: center;">{{ $form->email }}</td>
                        <td style="text-align: center;text-transform: capitalize;">{{ $form->position }}</td>
                        <td style="text-align: center; text-transform: capitalize;">
                            <a 
                                href="#Modal1{{ $form->id }}" 
                                data-toggle="modal" 
                                class="badge badge-success" 
                                data-target="#Modal1{{ $form->id }}">
                                Edit
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
                            <a href="{{ url('/program/delete/'.$form->id ) }}" class="btn btn-danger">Delete</a>
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
                        <form id="signupForm" enctype="multipart/form-data"  method="post" action="{{ url('/program/edit/'.$form->id) }}">{{ csrf_field() }}
                            <div class="modal-body">
                                <p>
                                    <div class="form-group">
                                        <label for="firstname">Name</label>
                                        <div>
                                            <input type="text" 
                                                   class="form-control" 
                                                   id="first_text" 
                                                   name="name" 
                                                   placeholder="{{$form->name}}"
                                                   autocomplete="off"
                                                   value="{{old('name',$form->name)}}"
                                                   />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname">Introduction</label>
                                    <div>
                                        <input type="text" class="form-control" 
                                                  name="introduction" 
                                                  placeholder="{{$form->introduction}}"
                                                  autocomplete="off"
                                                  value="{{old('introduction',$form->introduction)}}"
                                        />
                                    </div>
                                </div>
                                    <div class="form-group">
                                            <label for="lastname">Target Audience</label>
                                        <div>
                                            <input type="text" 
                                                   class="form-control" 
                                                   id="audience" 
                                                   name="audience" 
                                                   placeholder="{{$form->audience}}"
                                                   autocomplete="off"
                                                   value="{{old('audience',$form->audience)}}"
                                                   />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="lastname">Requirements</label>
                                        <div>
                                            <textarea class="home-textarea" 
                                                name="requirement" 
                                                rows="10"
                                                placeholder="{{old('requirement',$form->requirement)}}"
                                            >{{ old('requirement',$form->requirement) }}</textarea>
                                        </div>
                                    </div>
                                </p>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Save"/>
                            </div>
                        </form>
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
<!-- Add Home Content -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Add Staff Details</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <form id="signupForm" enctype="multipart/form-data"  method="post" action="{{ url('/team-store') }}">{{ csrf_field() }}
    <div class="modal-body">
        <p>
            <div class="form-group">
                <label for="firstname">Name</label>
                <div>
                    <input type="text" 
                           class="form-control" 
                           id="first_text" 
                           name="name" 
                           placeholder="Program Name"
                           autocomplete="off"
                           value="{{old('name')}}"
                           />
                </div>
            </div>
            <div class="form-group">
                <label for="lastname">Email</label>
            <div>
                <input type="text" class="form-control" 
                          name="email" 
                          placeholder="Email"
                          autocomplete="off"
                          value="{{old('email')}}"
                />
            </div>
        </div>
            <div class="form-group">
                    <label for="lastname">Phone Number</label>
                <div>
                    <input type="text" 
                           class="form-control" 
                           id="audience" 
                           name="phone_number" 
                           placeholder="Target Audience"
                           autocomplete="off"
                           value="{{old('phone_number')}}"
                           />
                </div>
            </div>
            <div class="form-group">
                <label for="lastname">Profile Photo</label>
            <div>
                <input type="file" 
                       id="audience" 
                       name="image" 
                       placeholder="Target Audience"
                       autocomplete="off"
                       value="{{old('image')}}"
                       />
            </div>
            <div class="form-group">
                <label for="lastname">Position</label>
            <div>
                <input type="text" 
                       class="form-control" 
                       id="audience" 
                       name="position" 
                       placeholder="Position"
                       autocomplete="off"
                       value="{{old('address')}}"
                       />
            </div>
            <div class="form-group">
                <label for="lastname">Address</label>
            <div>
                <input type="text" 
                       class="form-control" 
                       id="audience" 
                       name="address" 
                       placeholder="Address"
                       autocomplete="off"
                       value="{{old('address')}}"
                       />
            </div>
        </div>
        </p>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <input type="submit" class="btn btn-primary" value="Save"/>
    </div>
    </form>
    </div>
    </div>
</div>
<!-- End Home Content -->


@endsection