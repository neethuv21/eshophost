<?php 
use App\Http\Controllers\productcontroller;
$total=0;
if(Session()->has('user')){
$total=productcontroller::cartItem();
}
?>


<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Eshop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/myorders">Orders</a>
        </li>
        
        
        <li class="nav-item">
        <form action="/search" class="d-flex">
        <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </li>
         </ul>
         <ul class="navbar-nav  ">


        <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="/cartlist">Cart({{$total}})</a>
         
        </li>
        @if(Session::has('user'))
            
          

          <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    {{Session::get('user')['name']}}
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="/logout">Logout</a></li>
    
  </ul>
  @else
  <a class="nav-link active" aria-current="page" href="/login">Login</a>
  <a class="nav-link active" aria-current="page" href="/register">Register</a>
  @endif
</div>
         </ul>

     
    </div>
  </div>
</nav>