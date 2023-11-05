@extends('index')
@section('login')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>	
<strong>{{ $message }}</strong>
</div>
@endif
<form method="POST" action="{{route('do.login')}}" class="bg-danger text-warning p-5 mt-3">
    @csrf
    <h1>Login</h1>
    <input type="text" name="name" class="form-control" placeholder="Enter your Name"><br>
    <input type="email" name="email" class="form-control" placeholder="Enter your Email"><br>
    <input type="date" name="dob" class="form-control" placeholder="Enter your DOB"><br>
    <input type="submit" class="btn btn-primary">
</form>
@endsection