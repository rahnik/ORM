<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;


class BookController extends Controller
{
    public function index()
    {
        $order = request('order') == 'asc' ? 'desc' : 'asc';
        $books = Book::query();
        if (request()->has('sort')) {
            $books->orderBy(request()->query('sort'), $order);
        }
        return view('welcome', ['books'=>$books->paginate(20), 'order' => $order]);
    }

    public function show($book)
    {
        //1. Get book from database
        $book = Book::find($book);
        //2. Send book to view
        return view('show', compact('book'));
    }

}
