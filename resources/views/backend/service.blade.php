@extends('layouts.back_end.admin_design') 
@section('title','Service Page')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-name">
                <div class="page-title-icon">
                    <i class="lnr-apartment icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Service Page
                    <div class="page-title-subheading">Service Page</div>
                </div>
            </div>
        </div>
          <!-- Displaying an error message when the service has provided wrong credintials -->  
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
                        <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Contents
                    </div>
                    </div>
                    <div class="card-body">
                    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                      <tr>
                        <th style="text-align: center; text-transform: capitalize">Name</th>
                        <th style="text-align: center; text-transform: capitalize">Description</th>
                        <th style="text-align: center; text-transform: capitalize">Image</th>
                        <th style="text-align: center; text-transform: capitalize">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($services as $review => $service) 
                    @if($review< 1)
                      <a href="#exampleModalCenter" data-toggle="modal" data-target=".bd-example-modal-lg" class="badge badge-primary pull-right">Add</a><br><br>
                    @endif
                      <tr class="gradeX">
                        <td style="text-align: center; text-transform: capitalize;">{{ $service->name }}</td>
                        <td style="text-align: center; text-transform: capitalize;">{{ $service->description }}</td>
                        <td style="text-align: center;text-transform: capitalize;">
                            <img src="{{ asset('images/service/'.$service->image) }}" height="70px" width="70px" alt="No Image">
                        </td>
                        <td style="text-align: center; text-transform: capitalize;">
                            <a 
                                href="#Modal1{{ $service->id }}" 
                                data-toggle="modal" 
                                class="badge badge-success" 
                                data-target="#Modal1{{ $service->id }}">
                                Edit
                            </a>
                            <a
                                href="#Modal2{{ $service->id }}" 
                                data-toggle="modal" 
                                class="badge badge-danger" 
                                data-target="#Modal2{{ $service->id }}">
                                Delete
                            </a>
                        </td>
                      </tr>

                    <!-- Delete Service Content -->
                        <div class="modal fade" id="Modal2{{$service->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                    {{ $service->name }}<br>
                                    {{ $service->description }}<br>
                                    {{ $service->image }}<br>
                                    
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="{{ url('/admin/service/delete/'.$service->id ) }}" class="btn btn-danger">Delete</a>
                            </div>
                            </div>
                            </div>
                        </div>
                    <!-- Delete Edit Service Content -->


                    <!-- Edit Service Content -->
                    <div class="modal fade" id="Modal1{{$service->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Service Page Content</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <form id="signupForm" enctype="multipart/form-data"  method="post" action="{{ url('/admin/service/edit/'.$service->id) }}">{{ csrf_field() }}
                        <div class="modal-body">
                            <p>
                                <div class="form-group">
                                    <label for="firstname">Name</label>
                                    <div>
                                        <input type="text" class="form-control" id="name" name="name" 
                                        autocomplete="off"
                                        value="{{ $service->name }}" 
                                        placeholder="{{ $service->name }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label for="lastname">Description</label>
                                    <div>
                                        <textarea 
                                            class="service-textarea" 
                                            name="description" 
                                            rows="10"
                                            field="text"
                                            placeholder="Start Typing"
                                            :value="@old('image', $service->image)">{{ $service->description }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                        <label for="lastname">Image</label>
                                    <div>
                                        <input multiple type="file" type="file" name="image" class="form-control-file" type="file" />
                                        <input type="hidden" name="prev_photo" value="{{$service->image}}" />
                                        <img width="100" src="{{ asset('images/service/'.$service->image) }}"/>
                                    </div>
                                </div>
                            </p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Update"/>
                        </div>
                        </form>
                        </div>
                        </div>
                    </div>
                <!-- End Edit Service Content -->

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
<!-- Add Service Content -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Add Service Page Content</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <form id="signupForm" enctype="multipart/form-data"  method="post" action="{{ url('/admin/service/store') }}">{{ csrf_field() }}
    <div class="modal-body">
        <p>
            <div class="form-group">
                <label for="firstname">Name</label>
                <div>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name (First Text)"/>
                </div>
            </div>
            <div class="form-group">
                    <label for="lastname">Description</label>
                <div>
                    <textarea class="service-textarea" name="description" placeholder="Description"></textarea>
                </div>
            </div>
            <div class="form-group">
                    <label for="lastname">Image </label>
                <div>
                    <input multiple type="file" type="file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg" class="form-control-file"/>
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
<!-- End Service Content -->


@endsection
