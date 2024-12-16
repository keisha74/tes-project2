<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('home', compact('books'));
    }
    
    public function filterByCategory($category)
    {
        $books = Book::where('category', $category)->get();
        return view('category', compact('books'));
    }

    public function about()
    {
        return view('about');
    }

    public function detail($id)
    {
        $book = Book::findOrFail($id);
        return view('detail', compact('book'));
    }
    
    public function category(){
        $books = Book::whereHas('category', function($query) use ($category) {
            $query->where('name', $category);
        })->get();
    }

}
