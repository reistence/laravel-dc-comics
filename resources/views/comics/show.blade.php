@extends('layouts.app')

@section('title', $comic->title)
@section('content')
    <div class="container">
        

        <h2>Comic: {{$comic->title}}</h2>
        <div class="mt-4">
            @if (!empty($comic->thumb))
                <img src="{{$comic->thumb}}" alt="">
            @else
                <p>No Image found</p>
            @endif

            <dl>
                <dt>Title</dt>
                <dd>{{$comic->title}}</dd>
                <dt>Price</dt>
                <dd>{{$comic->price}}</dd>
                <dt>Series</dt>
                <dd>{{$comic->series}}</dd>
                <dt>Type</dt>
                <dd>{{$comic->type}}</dd>
                <dt>Description</dt>
                <dd>{{$comic->Description}}</dd>

            </dl>
        </div>
    </div>
@endsection