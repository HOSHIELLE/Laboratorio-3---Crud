<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/diag', function () {
    return 'OK ROUTE';
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);
