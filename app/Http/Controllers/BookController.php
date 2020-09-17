<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;


class BookController extends Controller
{
    public function index()
    {
        if (request()->has('sort')) {
            $books= Book::orderBy(request()->query('sort'))->paginate(20);
        } else {
            $books= Book::paginate(20);
        }
        return view('welcome', ['books'=>$books]);
    }

}
