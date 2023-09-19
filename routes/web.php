<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('Home');
});

Route::get('/user/{id}', function ($id) {
    echo 'USUARIO: ' . $id;
})->name('user.profile');

Route::get('/post/{slug}', function ($slug) {
    echo "Post do Blog: ". $slug;
})->name('blog.post');

Route::get('/category/{category}', function ($category) {
    echo "Posts na Categoria: ". $category;
})->name('blog.category');
