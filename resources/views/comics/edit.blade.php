@extends('layouts.app')
@section('title', 'Edit Comics')
@section('content')
    <div class="container">
            <h2 class="text-center">Add a new Comic</h2>
            <div class="row justify-content-center">
                <div class="col-7 mb-5">
                    <form action="{{route('comics.update', $comic->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-2">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
                        </div>

                        <div class="mb-2">
                            <label for="thumb">Thumb</label>
                            <input type="text" class="form-control" id="thumb" name="thumb"
                            value="{{$comic->thumb}}">
                        </div>

                        <div class="mb-2">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price"
                            value="{{$comic->price}}">
                        </div>

                        <div class="mb-2">
                            <label for="series">Series</label>
                            <input type="text" class="form-control" id="series" name="series"
                            value="{{$comic->series}}">
                        </div>

                        <div class="mb-2">
                            <label for="sale_date">Sale Date</label>
                            <input type="date" class="form-control" id="sale_date" name="sale_date"
                            value="{{$comic->sale_date}}">
                        </div>
                        <div class="mb-2">
                            <label for="typr">Type</label>
                            <input type="text" class="form-control" id="type" name="type"
                            value="{{$comic->type}}">
                        </div>

                        <div class="mb-2">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="10"
                           >{{$comic->description}}</textarea>
                        </div>

                        <button class="btn btn-danger" type="submit">Add</button>
                    </form>
                </div>
            </div>

        </div>
@endsection