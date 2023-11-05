@extends('index')
@section('home')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>	
<strong>{{ $message }}</strong>
</div>
@endif
<h1>LOGIN <br>
with your NAME,EMAIL & DOB</h1>
@endsection