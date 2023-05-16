@extends('layout')
@section('title')
    Подкатегории
@endsection
@section('content')
    @forelse($categories as $category)
        <a href="{{route('show-products.sub-categories', $category->id)}}">{{$category->title}}</a><br>
    @empty
            Пока пусто
    @endforelse
@endsection
