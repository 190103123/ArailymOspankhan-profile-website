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
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
})->name('main');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/post/create', function () {
    DB::table('post')->insert([
        'ID' => '1',
        'title' => 'Most beautiful cities in the world',
        'body' => 'Each locality has its own characteristics, history, architecture and interesting places, so it is very difficult to distinguish the best of them. But still, some of them are noted by tourists in their reviews more often than others. Thus, we managed to make a rating of the most beautiful cities in the world, which we invite you to get acquainted with.'
    ]);
});

Route::get('/post', function () {
    $post = Post::find(1);
    return $post;
});
