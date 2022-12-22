@extends('layouts.app')
@section('title', 'All Comics')
@section('content')
    <div class="container">
        <h1>All Comics</h1>
        <div class="text-end mb-4">
                <a href="{{ route('comics.create') }}" class="btn btn-primary">Add a new comic</a>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Type</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)  
                    <tr>
                        <th scope="row">{{$comic->title}}</th>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->type}}</td>
                        <td>
                            <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">
                        <i class="fa-regular fa-eye"></i>    
                        </a>
                              <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-success">
                                <i class="fa-regular fa-pen-to-square"></i>
                        </a>

                        <form class="d-inline" action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </form>
                    
                    </td>
                    </tr>
                    @endforeach
                  
                </tbody>
            </table>
    </div>
    
@endsection