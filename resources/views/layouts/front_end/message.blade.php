@if(Session::has('error'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 6000)" x-show="show" class="alert alert-danger alert-block" role="alert">
    <p style="text-align: center"><strong>{!! session('error') !!}</strong></p>
    <p style="text-align: center"><strong>Thank You For Choosing Skills Development Initiative</strong></p>
</div>
@endif
@if(Session::has('success'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 6000)" x-show="show" class="alert alert-success alert-block" role="alert">
    <p style="text-align: center"><strong>{!! session('success') !!}</strong></p>
    <p style="text-align: center"><strong>Thank You For Choosing Skills Development Initiative</strong></p>
</div>
@endif  