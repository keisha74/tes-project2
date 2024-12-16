<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}">E-LIBRARY</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('category', 'Fiction') }}">Fiction</a></li>
                    <li><a class="dropdown-item" href="{{ route('category', 'Comedy') }}">Comedy</a></li>
                    <li><a class="dropdown-item" href="{{ route('category', 'Philosophy') }}">Philosophy</a></li>
                    <li><a class="dropdown-item" href="{{ route('category', 'Romance') }}">Romance</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
        </ul>
    </div>
    </nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>