@extends('pages.master')
@section('content')
<div class="costom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result for products</h4>
            <a class="btn btn-success" href="/ordernow">Order Now</a> <br><br>
            @foreach($products as $item)
            <div class="row searched-item cart-list-devider">
                <div class="col-sm-3">
                <a herf="detail/{{$item->id}}">
                <img class="trending-image" scr="{{$item->photo}}">
                <div class="">
                    <h2>{{$item->name}}<h2>
                    <h5>{{$item->restaurant}}</h5>
                <div>
                <a>
                </div>
                <div class="col-sm-4">
                <div class="">
                    <h2>{{$item->name}}<h2>
                    <h5>{{$item->restaurant}}</h5>
                <div>
                </div>
                <div class="col-sm-3">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove</a>
                </div>
                
                </div>
                @endforeach
                <a class="btn btn-success" href="/ordernow">Order Now</a> <br><br>
</div>
</div>



@endsection