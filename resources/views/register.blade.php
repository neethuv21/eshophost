@extends('master')
@section('content')

<div class=" col-sm-5 justify-content-center align-items-center container mt-4 custom-login ">
<form action="register" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">User Name</label>
    <input type="text" name="name" class="form-control" >
    <div id="emailHelp" class="form-text"></div>
  </div>
    
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Register</button>
   </form>
</div>

 
@endsection