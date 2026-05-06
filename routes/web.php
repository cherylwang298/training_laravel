<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('main');
});

// Route::get('/1', function(){
//     return view('child');
// });

// Route::get('/2', function(){
//     return view('child2');
// });

Route::get('/books', [BookController::class, 'index'])->name('books.index');