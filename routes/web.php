<?php

use Illuminate\Support\Facades\Route;
use App\Models\MiniBlogRecord;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\BasicConroller;
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

Route::get('/', [ StaticPageController::class,'index'])->name('index');
Route::get('/plasm-cutting', [StaticPageController::class, 'plasm_cutting'])->name('plasm-cutting');

Route::get('/pipe-bend', function () {
    return view('pages/-bend');
})->name('pipe-bend');

Route::get('/sheet-bend', function () {
    return view('pages/sheet-cutting');
})->name('sheet-bend');

Route::get('/cutting', function () {
    return view('pages/cutting');
})->name('cutting');

//! ваще хз как работать с query
Route::get('/gallery/{category}?page={page}', [UserController::class, 'index'])
->name('gallery');
// Route::get('/', function () {
//     return view('index');
// });
Route::get('/login', [BasicConroller::class, 'index'])->name('login');
Route::post('/loginDo', [BasicConroller::class, 'singin']);

Route::middleware('auth')->prefix('admin')->name('admin.')->group( function(){
    Route::resource('panel', 'Admin');
}
);
