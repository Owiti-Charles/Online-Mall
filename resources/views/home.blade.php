@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">Products</h2>
    <div class="row">
        @foreach ($allProducts as $product)
        <div class="col-md-4">
            <div class="card mb-4">
            <img class="card-img-top" src="{{ asset('img.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">{{ $product->name}}</h4>
                <p class="card-text text-center">{{ $product->description}}</p>
                <h3>Ksh. {{ $product->price }}</h3>
            </div>
            <div class="card-body">
            <a href="{{ route('cart.add', $product->id) }}" class="card-link">Add to Cart</a>
            </div>
        </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
