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
    @section('title', 'About Us')
    @section('content')
    <div class="container mt-5">
        <h2>About Us</h2>
        <br>Welcome to the E-LIBRARY! your ultimate gateway to knowledge and discovery!
        Explore our extensive digital collection, enjoy a seamless browsing experience, 
        and let our library be your partner in learning.
        <br><strong>For book orders, kindly reach out to the contact details below!</strong>
        <br>
        <br><strong>Address:</strong>
        <br>Jl. Library Avenue No.10, Booktown, 12345
        <br>
        <br><strong>Opening Hours:</strong>
        <br>Monday–Friday: 8:00 AM – 8:00 PM
        <br>Saturday: 9:00 AM – 5:00 PM
        <br>Sunday: Closed.
        <br>
        <br><strong>Contact Information:</strong>
        <br>Phone: (123) 456-7890
        <br>Email: info@elibrary.com
        <br>
    </div>

    @include('layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
