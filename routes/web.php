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
    return view('home');
});
//
//Route::resource('products', \App\Http\Controllers\ProductController::class);
//
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/chat', function() {
//    return view('chat');
//})->middleware('auth');
//
//Route::get('/getUserLogin', function() {
//    return Auth::user();
//})->middleware('auth');
//
//Route::get('/messages', function() {
//    return App\Models\Message::with('user')->get();
//})->middleware('auth');
//
//Route::post('/messages', function() {
//    $user = Auth::user();
//
//    $message = new App\Models\Message();
//    $message->message = request()->get('message', '');
//    $message->user_id = $user->id;
//    $message->save();
//
//    return ['message' => $message->load('user')];
//})->middleware('auth');
