@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Products</h2>
    <div class="row">
        @foreach ($produts as product)
            <div class="card">
            <img class="card-img-top" src="img.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
            </div>
            <div class="card-body">
                <a href="#" class="card-link">Add to Cart</a>
            </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
