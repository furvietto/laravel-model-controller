@extends('layout.base')

@section('content')
    @foreach($movie as $item)
        {{$item->title}}
    @endforeach
@endsection