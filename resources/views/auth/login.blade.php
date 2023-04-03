@extends('layouts.app')

@section('title', 'login')

@section('content')


<div class="row p-5">
    <div class="col-md-4 mx-auto">
    <div class="card">
  <div class="card-header text-header">
    Login
  </div>
  <div class="card-body">
  <form method="POST" action="{{ url('login') }}">
    @csrf

    @if(session()->has('error_massage'))
     <div class="alert alert-danger">{{ session()->get('error_massage') }}</div>
    @endif
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1 " name="password">
  </div>

  <div class="text-center">

      <button type="submit" class="btn btn-primary">Login</button>
  </div>
    </form>
  </div>
</div>
 
    </div>
</div>



@endsection