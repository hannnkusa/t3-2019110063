@extends('layout.master')

@section('title', $book->title)

@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="col-8">
                <h2>{{ $book->judul }}</h2>
            </div>
            <div class="col-4">
                <div class="float-right">
                    <div class="btn-group" role="group">
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary ml-3">Edit</a>

                        <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger ml-3">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <h5>
            <span class="badge badge-primary">
                <i class="fa fa-star fa-fw"></i>
                {{ $book->kategori }}
            </span>
        </h5>
        <p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <i class="fa fa-th-large fa-fw"></i>
                <em>{{ $book->penerbit }}</em>
            </li>
        </ul>
        </p>
        <hr>
        <p class="lead">The UUID : {{ $book->id }}</p>
    </div>
@endsection