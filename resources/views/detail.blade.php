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
    @section('title', 'Book Detail')
    @section('content')
    <div class="container mt-4">
        <h2>{{ $book->title }}</h2>
        <img src="{{ asset($book->cover) }}" class="img-fluid mb-4" alt="{{ $book->category }} cover" style="max-width: 300px; height: auto;">
        <p><strong>Author:</strong> {{ $book->author }}</p>
        <p><strong>Genre:</strong> {{ $book->category }}</p>
        <p><strong>Synopsis:</strong> {{ $book->synopsis }}</p>
        <a href="{{ route('about') }}" class="btn btn-secondary">Order</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @include('layout.footer')
</body>
</html>