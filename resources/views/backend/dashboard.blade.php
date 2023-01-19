@extends('layouts.back_end.admin_design') 
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{!! session('success') !!}</strong> 
        </div>
    @endif
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-home icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Dashboard
                    <div class="page-title-subheading">Overview</div>
                </div>
            </div>  
        </div>
    </div>



</div>
@endsection


