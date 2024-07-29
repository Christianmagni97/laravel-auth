<?php
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\HomeController as GuestHomeController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', [GuestHomeController::class, 'index'])->name('home');
Route::middleware('auth')->name('admin.')->prefix('admin/')->group(function(){
    Route::resource('/posts',AdminPostController::class);
    }
);