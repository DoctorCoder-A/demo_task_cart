@extends('layout')
@section('title')
    Товары
@endsection
@section('content')
    @forelse($products as $product)
        <p>name: {{$product->name}}</p>
        <p>price: {{$product->price}}</p>
    @empty
            Пока пусто
    @endforelse
@endsection
