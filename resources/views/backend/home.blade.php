@extends('layouts.back_end.admin_design') 
@section('title','Home Page')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="lnr-apartment icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Home Page
                    <div class="page-title-subheading">Home Page</div>
                </div>
            </div>
        </div>
          <!-- Displaying an error message when the home has provided wrong credintials -->  
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
                        <th style="text-align: center; text-transform: capitalize">First Text</th>
                        <th style="text-align: center; text-transform: capitalize">Second Text</th>
                        <th style="text-align: center; text-transform: capitalize">Third Text</th>
                        <th style="text-align: center; text-transform: capitalize">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        <a href="#exampleModalCenter" data-toggle="modal" data-target=".bd-example-modal-lg" class="badge badge-primary pull-right">Add</a><br><br>
                    @foreach ($homes as $review => $home)
                      <tr class="gradeX">
                        <td style="text-align: center; text-transform: capitalize;">{{ $home->first_text }}</td>
                        <td style="text-align: center; text-transform: capitalize;">{{ $home->second_text }}</td>
                        <td style="text-align: center;text-transform: capitalize;">{{ $home->third_text }}</td>
                        <td style="text-align: center; text-transform: capitalize;">
                            <a 
                                href="#Modal1{{ $home->id }}" 
                                data-toggle="modal" 
                                class="badge badge-success" 
                                data-target="#Modal1{{ $home->id }}">
                                Edit
                            </a>
                            <a
                                href="#Modal2{{ $home->id }}" 
                                data-toggle="modal" 
                                class="badge badge-danger" 
                                data-target="#Modal2{{ $home->id }}">
                                Delete
                            </a>
                        </td>
                      </tr>

                    <!-- Delete Home Content -->
                        <div class="modal fade" id="Modal2{{$home->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Delete Home Page Content</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <p class="btn-danger">
                                    Are You Sure You Want to Delete?<br>
                                    {{ $home->first_text }}<br>
                                    {{ $home->second_text }}<br>
                                    {{ $home->third_text }}<br>
                                    
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="{{ url('/admin/home/delete/'.$home->id ) }}" class="btn btn-danger">Delete</a>
                            </div>
                            </div>
                            </div>
                        </div>
                    <!-- Delete Edit Home Content -->


                    <!-- Edit Home Content -->
                        <div class="modal fade" id="Modal1{{$home->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Home Page Content</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <form id="signupForm" enctype="multipart/form-data"  method="post" action="{{ url('/admin/home/edit/'.$home->id) }}">{{ csrf_field() }}
                            <div class="modal-body">
                                <p>
                                    <div class="form-group">
                                        <label for="firstname">Heading (First Text)</label>
                                        <div>
                                            <input type="text" class="form-control" id="first_text" name="first_text" 
                                            autocomplete="off"
                                            value="{{ $home->first_text }}" 
                                            placeholder="{{ $home->first_text }}"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="lastname">Subheading (Second Text)</label>
                                        <div>
                                            <input type="text" class="form-control" id="second_text" name="second_text" 
                                            autocomplete="off"
                                            value="{{ $home->second_text }}" 
                                            placeholder="{{ $home->second_text }}"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="lastname">Third Text (Paragraph)</label>
                                        <div>
                                            <textarea 
                                                class="home-textarea" 
                                                name="third_text" 
                                                rows="10"
                                                field="text"
                                                placeholder="Start Typing"
                                                :value="@old('third_text', $home->third_text)">{{ $home->third_text }}</textarea>
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
                    <!-- End Edit Home Content -->

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
    <h5 class="modal-title" id="exampleModalLongTitle">Add Home Page Content</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <form id="signupForm" enctype="multipart/form-data"  method="post" action="{{ url('/admin/home/store') }}">{{ csrf_field() }}
    <div class="modal-body">
        <p>
            <div class="form-group">
                <label for="firstname">Heading (First Text)</label>
                <div>
                    <input type="text" class="form-control" id="first_text" name="first_text" placeholder="Heading (First Text)"/>
                </div>
            </div>
            <div class="form-group">
                    <label for="lastname">Subheading (Second Text)</label>
                <div>
                    <input type="text" class="form-control" id="second_text" name="second_text" placeholder="Subheading (Second Text)"/>
                </div>
            </div>
            <div class="form-group">
                    <label for="lastname">Third Text (Paragraph)</label>
                <div>
                    <textarea class="home-textarea" name="third_text" placeholder="Third Text (Paragraph)"></textarea>
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
