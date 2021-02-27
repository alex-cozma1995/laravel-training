<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StoriesController;

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
    return view('home');
});

use App\Http\Controllers\HomeController;

Route::get('/home', function (){
    return view('home');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::post('/posts/{post}/like', [PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/like', [PostLikeController::class, 'destroy'])->name('posts.likes');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/users/{user:username}/posts', [UserPostController::class, 'index'])->name('user.posts');

Route::get('/articles', function(){
    return view('articles');
})->name('articles');

Route::middleware(['auth'])->group( function() {
    // Route::get('/stories', 'StoriesController@index')->name('stories.index');
    // Route::get('/stories/{story}', 'StoriesController@show')->name('stories.show');

    Route::resources([
        'stories' => StoriesController::class
    ]);
});

//Route::get('/fimesz',  function () {
//    return view('fimesz.index');
//});


Route::get('/fimesz', function () {
    return view('fimesz');
})->name('fimesz');
Route::get('/alkalmaink', function () {
    return view('alkalmaink');
})->name('alkalmaink');
Route::get('/alkalom-1', function () {
    return view('alkalom');
})->name('alkalom-1');
Route::get('/alkalom-2', function () {
    return view('alkalmaink-karitativ');
})->name('alkalom-2');
Route::get('/kontakt', function () {
    return view('kontakt');
})->name('kontakt');
Route::get('/rolunk', function () {
    return view('rolunk');
})->name('rolunk');
Route::get('/projektek', function () {
    return view('projektek');
})->name('projektek');
Route::get('/projekt', function () {
    return view('projekt');
})->name('projekt');
