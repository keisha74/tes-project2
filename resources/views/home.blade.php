<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('layout.header')
</head>
<body>
    @extends('layout.master')
    @section('title', 'Home')
    @section('content')
    <h1>List of Books</h1>
    <div class="row">
    @foreach ($books as $book)
            <div class="col-md-4 mb-4">
                <div class="card">
                <img src="{{ asset($book->cover) }}" class="card-img-top" alt="{{ $book->category }} cover" style="max-width: 200px; height: auto; margin: 0 auto;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">{{ $book->author }}</p>
                        <p class="card-text">{{ Str::limit($book->synopsis, 100) }}</p>
                        <a href="{{ route('book.detail', $book->id) }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @include('layout.footer')
</body>
</html>
