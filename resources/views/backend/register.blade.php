@extends('layouts.back_end.sign_design') 
@section('title','SDI | Register')
@section('content')
<div class="d-flex h-100 justify-content-center align-items-center">
<div class="mx-auto app-login-box col-md-8">
<div class="app-logo-inverse mx-auto mb-3"></div>
<div class="modal-dialog w-100 mx-auto">
<div class="modal-content">
<div class="modal-body">
@if(Session::has('error'))
      <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>{!! session('error') !!}</strong> 
      </div>
  @endif         
  @if(Session::has('success'))
      <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>{!! session('success') !!}</strong> 
      </div>
  @endif
<div class="h5 modal-title text-center">
<h4 class="mt-2"> 
<div>Administrator Registration</div>
<span>Please register your details below</span>
</h4>
</div>
      <form class="" method="POST" enctype="multipart/form-data" action="{{ url('/admin/store') }}">{{ csrf_field() }}
        <div class="form-row">
              <div class="col-md-12">
                <div class="position-relative form-group">
                  <input name="name" id="exampleEmail" placeholder="Full Name e.g John Banda" type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="position-relative form-group">
                  <input name="phone_number" id="exampleEmail" placeholder="Phone Number..." type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="position-relative form-group">
                  <input name="address" id="exampleEmail" placeholder="Address..." type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="position-relative form-group">
                  <label>Profile Photo</label><br>
                  <input name="image" id="examplePassword" type="file">
                </div>
              </div>
              <div class="col-md-12">
                <div class="position-relative form-group">
                  <input name="email" id="exampleEmail" placeholder="Email here..." type="email" class="form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="position-relative form-group">
                  <input name="password" id="examplePassword" placeholder="Password here..." type="password" class="form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="position-relative form-group">
                  <input name="password_confirmation" id="examplePassword" placeholder="Confirm Password..." type="password" class="form-control">
                </div>
              </div>
              </div>
              <div class="divider"></div>
                <h6 class="mb-0">Already Have Account? 
                  <a href="{{ url('/admin/login') }}" style="text-decoration:none; color:none;" class="text-primary">
                    Go Back Home</a>
                </h6>
              </div>
              <div class="modal-footer clearfix">
              <div class="float-right">
                <button type="submit" class="btn btn-success btn-lg">Login to Admin Panel</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    <div class="text-center text-white opacity-8 mt-3">Copyright © Skills Development Initiative (SDI)  
      <script>
      var CurrentYear = new Date().getFullYear()
      document.write(CurrentYear)
      </script>
    </div>
</div>
</div>

@endsection