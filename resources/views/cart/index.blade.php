@extends('layouts.app')

@section('content')
    <h2>Your Cart</h2>


        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $item)
                <tr>
                    <td scope="row">{{ $item->name }}</td>
                    <td>
                        {{ Cart::session(auth()->id())->get($item->id)->getPriceSum() }}
                    </td>
                    <td>
                    <form action="{{ route('cart.update', $item->id) }}">
                        <input type="number" name="quantity" value="{{ $item->quantity }}">
                        <input type="submit" value="Save">
                    </form>

                    </td>
                    <td>
                    <a href="{{ route('cart.destroy', $item->id)}}">Remove</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <h3>
           Total Cost : Ksh. {{ Cart::session(auth()->id())->getSubTotal() }}
        </h3>

        <a class="btn btn-primary" href="#" role="button">Checkout</a>
@endsection
