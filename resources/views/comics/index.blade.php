@extends('layouts.main')

@section('title', 'fumtti')

@section('content')
<div class="row comics">
    @foreach ($comics as $comic)
    <a href="{{ route('comics.show', $comic->id) }}">
        <div class="card">
            <figure>
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </figure>
            <span>{{ $comic['title'] }}</span>
        </div>
    </a>
    @endforeach
</div>

@endsection