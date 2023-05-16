@extends('layout')
@section('title')
    Категории
@endsection
@section('content')
    @forelse($categories as $category)
        <a href="{{route('show.sub-categories', $category->id)}}">{{$category->title}}</a><br>
    @empty
            Пока пусто
    @endforelse
@endsection
