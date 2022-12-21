@extends('layouts.app')

@section('title', 'Crea una nuova pasta')

@section('content')

 <div class="container">
            <h2 class="text-center">Add a new Comic</h2>
            <div class="row justify-content-center">
                <div class="col-7 mb-5">
                    <form action="{{ route('comics.store') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>

                        <div class="mb-2">
                            <label for="thumb">Thumb</label>
                            <input type="text" class="form-control" id="thumb" name="thumb">
                        </div>

                        <div class="mb-2">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price">
                        </div>

                        <div class="mb-2">
                            <label for="series">Series</label>
                            <input type="text" class="form-control" id="series" name="series">
                        </div>

                        <div class="mb-2">
                            <label for="sale_date">Sale Date</label>
                            <input type="date" class="form-control" id="sale_date" name="sale_date">
                        </div>
                        <div class="mb-2">
                            <label for="typr">Type</label>
                            <input type="text" class="form-control" id="type" name="type">
                        </div>

                        <div class="mb-2">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="10"></textarea>
                        </div>

                        <button class="btn btn-danger" type="submit">Add</button>
                    </form>
                </div>
            </div>

        </div>
@endsection