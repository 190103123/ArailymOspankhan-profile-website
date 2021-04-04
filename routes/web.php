<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Consumer;
use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\BlogController;
use GuzzleHttp\Psr7\UploadedFile;

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

Route::get('blog', [BlogController::class, 'index']);
Route::get('blog/create', function(){
    return view('blog.create');
});

Route::post('blog/create', [BlogController::class, 'store'])->name('add-post');

Route::get('post/{id}',[BlogController::class, 'get_post']);

//lab 8
Route::get('/consumer', [ConsumerController::class, 'index']);
Route::post('/consumer/send', [ConsumerController::class, 'store'])->name('add-user');

Route::get('/sendEmail', [MailController::class,'sendEmail']);
