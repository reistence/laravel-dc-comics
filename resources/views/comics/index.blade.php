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
                              <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary">
                                <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                        {{-- <button
                        type="button" class="del btn btn-danger" data-bs-toggle="modal" data-bs-target="#del-modal-{{$comic->id}}"
                        >
                            <i class="fa-regular fa-trash-can"></i>
                        </button> --}}

                        {{-- <form class="d-inline" action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="modal fade" id="del-modal-{{$comic->id}}" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete {{$comic->title}}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this comic?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Dismiss</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </form> --}}
                        <button
                        type="button" class="del btn btn-danger"
                        >
                            <i class="fa-regular fa-trash-can"></i>
                        </button>

                        <form class="mymod"  tabindex="-1"
                        action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <h3>Delete</h3>
                            <p>{{$comic->title}}</p>
                            <p>Are you sure you want to delete this comic?</p>
                            <button class="mybtn btn btn-danger" type="submit">Delete</button>
                            <button type="button" class="dismissBtn btn btn-light">Dismiss</button>
                        </form>
                    
                    </td>
                    </tr>
                    @endforeach
                  
                </tbody>
            </table>
    </div>
    
@endsection