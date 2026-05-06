<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;


class BookController extends Controller
{
    //

    public function index(){
    $books = Books::with('author')->get();
    return view('books.home', compact('books'));
    }
}
