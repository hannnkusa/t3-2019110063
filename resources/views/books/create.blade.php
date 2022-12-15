@extends('layout.master')

@section('title', 'Add New Books')

@section('content')
    <h2>Add New Books</h2>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="row">
            <!-- <div class="col-md-6 mb-3">
                <label for="title">ID/DOI</label>
                <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" id="id"
                    value="{{ old('id') }}">
                @error('id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div> -->
            <div class="col-md-6 mb-3">
                <label for="title">Judul</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul"
                    value="{{ old('judul') }}">
                @error('judul')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="genre">Halaman</label>
                <input type="number" class="form-control @error('halaman') is-invalid @enderror" name="halaman"
                    id="halaman" value="{{ old('halaman') }}">
                @error('halaman')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        <!-- </div>
        <div class="row"> -->
            <div class="col-md-6 mb-3">
                <label for="title">Kategori</label>
                <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" id="kategori"
                    value="{{ old('kategori') }}">
                @error('kategori')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="genre">Penerbit</label>
                <input type="text" class="form-control @error('penerbit') is-invalid @enderror"
                    name="penerbit" id="penerbit" value="{{ old('penerbit') }}">
                @error('penerbit')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
    </form>
@endsection