<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view("book", ["books" => $books]);
    }

    // Fungsi untuk pergi ke halaman tambah buku
    public function add()
    {
        $categories = Category::all();
        return view("book-add", ["categories" => $categories]);
    }

    // Fungsi untuk menambah buku ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'book_code' => 'required|unique:books|max:255',
            'title' => 'required|max:255',
        ]);

        $newName = '';
        if ($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title . '-' . now()->timestamp . '.' . $extension;
            $request->file('image')->storeAs('cover', $newName);
        }

        $request['cover'] = $newName;
        $book = Book::create($request->all());
        return redirect("books")->with('status', 'Book Added Successfully');
    }
}
