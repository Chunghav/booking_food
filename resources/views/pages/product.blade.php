@extends('pages.master')
@section('content')


<div class="container custom-product ">
    <h1 class="text-dark ml-5">Food</h1>
      <hr class="line">
   <div class="trending-wrapper ">
        @foreach($products as $item)
        <div class="trending-item ">
            <a href="detail/{{$item['id']}}"  >
            <img class="trending-image" src="{{ $item['photo']}}" width="150" height="150">
            <div class="">
            <h3> {{$item['name']}}</h3>
            <h4> {{$item['restaurant']}}</h4>
            </div>
            <a>
        </div>
        @endforeach
    
    
    
    
    
    
    </div>




</div>

@endsection