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
    @section('title', 'Category')
    @section('content')
    <div class="row">
        <h2 class="mb-4">{{ ucfirst(request()->category) }}</h2>
        <div class="row">
            @foreach ($books as $book)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                        <img src="{{ asset($book->cover) }}" class="img-fluid mb-4" alt="{{ $book->category }} cover" style="max-width: 300px; height: auto;">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text">{{ $book->author }}</p>
                            <p class="card-text">{{ Str::limit($book->synopsis, 100) }}</p>
                            <a href="{{ route('book.detail', $book->id) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
