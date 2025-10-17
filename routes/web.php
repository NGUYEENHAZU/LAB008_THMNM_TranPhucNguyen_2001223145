<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products/expensive', [ProductController::class, 'expensive']);
Route::resource('products', ProductController::class);

Route::get('/categories/count', [CategoryController::class, 'productCount']);

Route::get('/students/course-count', [StudentController::class, 'courseCount']);
Route::resource('students', StudentController::class);

Route::resource('users', UserController::class);


