@if(Session::has('error'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 6000)" x-show="show" class="alert alert-danger alert-block" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
<strong>{!! session('error') !!}</strong>
</div>
@endif  
@if(Session::has('success'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 6000)" x-show="show" class="alert alert-success alert-block" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
<strong>{!! session('success') !!}</strong>
</div>
@endif

