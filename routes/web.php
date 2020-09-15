<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $books = App\Book::where('language', 'Swahili')->get();
    //$books = DB::table('books')->where('language', 'Swahili')->get();
    return view('welcome', ['books'=>$books]);
    //return view('welcome',['books' => $books]);
});
