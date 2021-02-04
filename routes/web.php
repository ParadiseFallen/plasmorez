<?php

use Illuminate\Support\Facades\Route;
use App\Models\MiniBlogRecord;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\BasicConroller;
use App\Http\Controllers\Admin;
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
#PUBLIC
Route::get('/', [ StaticPageController::class,'index'])->name('index');
Route::get('/plasm-cutting', [StaticPageController::class, 'plasmCutting'])->name('plasm-cutting');
Route::get('/sheet-bend', [StaticPageController::class, 'sheetBend'])->name('sheet-bend');
Route::get('/pipe-bend', [StaticPageController::class, 'pipeBend'])->name('pipe-bend');
Route::get('/cutting', [StaticPageController::class, 'cutting'])->name('cutting');
Route::get('/forge', [StaticPageController::class, 'forge'])->name('forge');
Route::get('/painting', [StaticPageController::class, 'painting'])->name('painting');
Route::get('/docs', [StaticPageController::class, 'docs'])->name('docs');
Route::get('/gallery/{gallery_id}', [\App\Http\Controllers\GalleryController::class, 'index'])->name('gallery');

# POSTS
Route::post('/contact-me', [\App\Http\Controllers\Contact::class, 'contactMe']);

#ADMIN
Route::get('/login', [BasicConroller::class, 'index'])->name('login');
Route::post('/loginDo', [BasicConroller::class, 'singin']);
Route::middleware('auth')->prefix('admin')->name('admin.')->group( function(){
    Route::resource('panel', Admin::class);
}
);
