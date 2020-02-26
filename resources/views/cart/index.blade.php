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
                    <td>{{ $item->price }}</td>
                    <td>
                        <input type="number" value="{{ $item->quantity }}">
                    </td>
                    <td>
                    <a href="{{ route('cart.destroy', $item->id)}}">Remove</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


@endsection
