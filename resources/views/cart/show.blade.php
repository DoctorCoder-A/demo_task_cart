@extends('layout')
@section('title')
    Cart
@endsection
@section('content')
    @forelse($cartItems as $item)
        <p>name: {{$item->product->name}}</p>
        <p>price: {{$item->product->price}}</p>
    @empty
        Пока пусто
    @endforelse
@endsection
