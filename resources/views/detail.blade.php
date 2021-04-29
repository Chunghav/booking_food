@extends('pages.master')
@section('content')

        

<div class="container custom-detail">
    <div class="row">
    <div class="col-sm-6">
        <img class="detail-image" src="{{ $product['photo']}}">
        </div>

        <div class="col-sm-6">
            <a class="back" href="{{ route('product') }}"> Go Back</a>
            <h2>{{$product['name']}}</h2>
            <h3>Restaurant : {{$product['restaurant']}}</h3>
            <h4>Price : {{$product['price']}}</h4>
                <br><br>
                <form action="{{ route('addToCart') }}" method="POST">
                    @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn addtocard"> Add to cart</button>
                </form>
                <br><br>
                <button class="btn btn-success"> Buy Now</button>
                <br><br>
            </div>

        
    </div>
</div>
@endsection