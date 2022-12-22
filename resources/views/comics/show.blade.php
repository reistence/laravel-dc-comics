@extends('layouts.app')

@section('title', $comic->title)
@section('content')
    <div class="container">
        

        <h2>{{$comic->title}}</h2>
        <div class="my-4 d-flex gx-3 justify-content-between align-items-start">
            @if (!empty($comic->thumb))
                <img class="comic-img" src="{{$comic->thumb}}" alt="">
            @else
                <p>No Image found</p>
            @endif

            <dl class="w-75">
                <dt>Title</dt>
                <dd>{{$comic->title}}</dd>
                <dt>Price</dt>
                <dd>{{$comic->price}}</dd>
                <dt>Series</dt>
                <dd>{{$comic->series}}</dd>
                <dt>Type</dt>
                <dd>{{$comic->type}}</dd>
                <dt>Sale Date</dt>
                <dd>{{$comic->sale_date}}</dd>
                <dt>Description</dt>
                <dd>{{$comic->description}}</dd>

            </dl>
        </div>
    </div>
@endsection