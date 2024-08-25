<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VetCMSController;
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
    return view('index');
});
Route::get('/draft', function () {
    return view('draft.dashboard');
});
Route::get('/draft/articles', function () {
    return view('draft.article-edit');
});
Route::get('/draft/pages', function () {
    return view('draft.pages');
});
Route::get('/draft/pages/edit', function () {
    return view('draft.pages-edit');
});


Route::get('/login-page', function () {
    return view('login-page');
})->name('login');

Route::get('/content', function () {
    return view('vet-cms.content');
});

Route::get('/content', function () {
    return view('vet-cms.content');
});


// Route::get('/preview', [VetCMSController::class, 'preview']);

Route::get('/preview', [VetCMSController::class, 'preview'])->name('preview');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
