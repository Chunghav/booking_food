@extends('pages.master')
@section('content')

<div class="container custom-product ">
    <h1 class="text-dark ml-5">Search Product is</h1>
      <hr class="line">
   
    <div class="col-sm-4">
    <a herf="#">Fitter</a>
    </div>
        <div class="col-sm-4">
        <div class="trending-wrapper ">
        @foreach($products as $item)
        <div class="search-item ">
            <a href="detail/{{$item['id']}}"  >
            <img class="trending-image" src="{{ $item['photo']}}">
            <div class="">
            <h2> {{$item['name']}}</h2>
            <h5> {{$item['restaurant']}}</h5>
            </div>
            <a>
        </div>
        @endforeach
    
    
        </div>
    </div>




</div>

@endsection

