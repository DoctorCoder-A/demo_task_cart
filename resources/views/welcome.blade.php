@extends('layout')
@section('title')
    Меню
@endsection
@section('content')
    <a href="{{route('show.categories')}}">Categories</a><br>
    <a href="{{route('cart.index')}}">Корзина</a>
@endsection
