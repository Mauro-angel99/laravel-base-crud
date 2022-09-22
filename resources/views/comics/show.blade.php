@extends('layouts.main')

@section('title', $comic->title)

@section('content')
<div>
    <h1>{{ $comic['title'] }}</h1>
    <p>{{ $comic['description'] }}</p>
    <img src="{{ $comic['thumb'] }}" alt="">
    <span>{{ $comic['price'] }}</span>
    <span>{{ $comic['series'] }}</span>
    <span>{{ $comic['prisale_datece'] }}</span>
    <span>{{ $comic['type'] }}</span>



</div>

@endsection