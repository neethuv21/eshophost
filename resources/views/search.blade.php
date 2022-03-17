@extends('master')
@section('content')

<div class=" custom-product ">


<div class=".col-sm-6">
<a href="#"><h5>Filter</h5></a>
</div>
<div class=".col-md-6">
<div class="trending-wrapper">
<h4>Result for Product</h4>
@foreach($products as $item)
    <div class="searched item">
    <a href="detail/{{$item['id']}}">
      <img class="trending-image" src="{{$item['gallery']}}"  alt="...">
      <div class="">
      <h2>{{$item['name']}}</h2>
      <h5>{{$item['description']}}</h5>
     </div>
    </a>
    </div>
    @endforeach
    
    
  
</div>
</div>


</div>

 
@endsection