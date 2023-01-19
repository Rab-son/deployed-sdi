@extends('layouts.back_end.admin_design') 
@section('title','About Page')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="lnr-apartment icon-gradient bg-mean-fruit"></i>
                </div>
                <div>About Page
                    <div class="page-title-subheading">About Page</div>
                </div>
            </div>
        </div>
          <!-- Displaying an error message when the about has provided wrong credintials -->  
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
                        <th style="text-align: center; text-transform: capitalize">Heading</th>
                        <th style="text-align: center; text-transform: capitalize">Description</th>
                        <th style="text-align: center; text-transform: capitalize">Image</th>
                        <th style="text-align: center; text-transform: capitalize">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        <a href="#exampleModalCenter" data-toggle="modal" data-target=".bd-example-modal-lg" class="badge badge-primary pull-right">Add</a><br><br>
                    @foreach ($abouts as $review => $about) 
                      <tr class="gradeX">
                        <td style="text-align: center; text-transform: capitalize;">{{ $about->heading }}</td>
                        <td style="text-align: center; text-transform: capitalize;">{{ $about->description }}</td>
                        <td style="text-align: center;text-transform: capitalize;">
                            <img src="{{ asset('images/about/'.$about->image) }}" height="70px" width="70px" alt="No Image">
                        </td>
                        <td style="text-align: center; text-transform: capitalize;">
                            <a 
                                href="#Modal1{{ $about->id }}" 
                                data-toggle="modal" 
                                class="badge badge-success" 
                                data-target="#Modal1{{ $about->id }}">
                                Edit
                            </a>
                            <a
                                href="#Modal2{{ $about->id }}" 
                                data-toggle="modal" 
                                class="badge badge-danger" 
                                data-target="#Modal2{{ $about->id }}">
                                Delete
                            </a>
                        </td>
                      </tr>

                    <!-- Delete About Content -->
                        <div class="modal fade" id="Modal2{{$about->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Delete About Page Content</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <p class="btn-danger">
                                    Are You Sure You Want to Delete?<br>
                                    {{ $about->heading }}<br>
                                    {{ $about->description }}<br>
                                    {{ $about->image }}<br>
                                    
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="{{ url('/admin/about/delete/'.$about->id ) }}" class="btn btn-danger">Delete</a>
                            </div>
                            </div>
                            </div>
                        </div>
                    <!-- Delete Edit About Content -->


                    <!-- Edit About Content -->
                        <div class="modal fade" id="Modal1{{$about->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Edit About Page Content</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <form id="signupForm" enctype="multipart/form-data"  method="post" action="{{ url('/admin/about/edit/'.$about->id) }}">{{ csrf_field() }}
                            <div class="modal-body">
                                <p>
                                    <div class="form-group">
                                        <label for="firstname">Heading</label>
                                        <div>
                                            <input type="text" class="form-control" id="heading" name="heading" 
                                            autocomplete="off"
                                            value="{{ $about->heading }}" 
                                            placeholder="{{ $about->heading }}"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="lastname">Description</label>
                                        <div>
                                            <textarea 
                                                class="about-textarea" 
                                                name="description" 
                                                rows="10"
                                                field="text"
                                                placeholder="Start Typing"
                                                :value="@old('image', $about->image)">{{ $about->description }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                            <label for="lastname">Image</label>
                                        <div>
                                            <input multiple type="file" type="file" name="image" class="form-control-file" type="file" />
                                            <input type="hidden" name="prev_photo" value="{{$about->image}}" />
                                            <img width="100" src="{{ asset('images/about/'.$about->image) }}"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname">Gallery Image</label>
                                    <div>
                                        <input multiple type="file" type="file" name="images[]" id="image" accept="image/x-png,image/gif,image/jpeg" /><br>
                                        @foreach($galleries as $gallery)
                                            @if($gallery->about_id === $about->id)
                                                <input type="hidden" name="images[]" value="{{$gallery->image}}" />
                                                <img width="100" src="{{ asset('images/about/gallery/'.$gallery->image) }}"/>
                                            @endif
                                        @endforeach
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
                    <!-- End Edit About Content -->

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
<!-- Add About Content -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Add About Page Content</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <form id="signupForm" enctype="multipart/form-data"  method="post" action="{{ url('/admin/about/store') }}">{{ csrf_field() }}
    <div class="modal-body">
        <p>
            <div class="form-group">
                <label for="firstname">Heading</label>
                <div>
                    <input type="text" class="form-control" id="heading" name="heading" placeholder="Heading (First Text)"/>
                </div>
            </div>
            <div class="form-group">
                    <label for="lastname">Description</label>
                <div>
                    <textarea class="about-textarea" name="description" placeholder="Description"></textarea>
                </div>
            </div>
            <div class="form-group">
                    <label for="lastname">Image </label>
                <div>
                    <input multiple type="file" type="file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg" class="form-control-file"/>
                </div>
            </div>
            <div class="form-group">
                <label for="lastname">Gallery Image</label>
            <div>
                <input multiple type="file" type="file" name="images[]" id="image" accept="image/x-png,image/gif,image/jpeg" />
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
<!-- End About Content -->


@endsection
