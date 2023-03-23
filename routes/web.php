<?php

use App\Http\Controllers\AdController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;


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

Route::get('/', [PublicController::class, 'index'])->name('home');

Route::get('/avisolegal', [PublicController::class,'avisolegal'])->name('avisolegal');
Route::get('/terminos', [PublicController::class,'terminos'])->name('terminos');
Route::get('/politicaprivacidad', [PublicController::class,'politicaprivacidad'])->name('politicaprivacidad');
Route::get('/cookies', [PublicController::class,'cookies'])->name('cookies');


Route::get('/ads/create', [AdController::class,'create'])->name('ads.create');

Route::get('/category/{category:name}/ads', [PublicController::class, 'adsByCategory'])->name('category.ads');

Route::get('/user/{user:name}/ads', [PublicController::class, 'adsByUser'])->name('user.ads');



Route::get('/ads/{ad}', [AdController::class, 'show'])->name("ads.show");

// ruta para la homepage del revisor
Route::middleware(['isRevisor'])->group(function () {
Route::get('/revisor', [RevisorController::class, 'index'])->name('revisor.home'); 
Route::patch('/revisor/ad/{ad}/accept',[RevisorController::class,'acceptAd'])->name('revisor.ad.accept');
Route::patch('/revisor/ad/{ad}/reject',[RevisorController::class,'rejectAd'])->name('revisor.ad.reject');    
});

Route::get('/revisor/become', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('revisor.become');
Route::get('/revisor/{user}/make', [RevisorController::class, 'makeRevisor'])->middleware('auth')->name('revisor.make');

// ruta para los idiomas

Route::post('/locale/{locale}', [PublicController::class,'setLocale'])->name('locale.set');

/* Route::get("/search",[PublicController::class, 'search'])->name('search'); */



Route::get("/search", [PublicController::class, 'search'])->name('search'); 

Route::get('list', [PublicController::class, 'list'])->name('list');


Route::get('contact', [PublicController::class, 'contact'])->name('contact');



Route::post('favorite-add/{id}', [PublicController::class, 'favoriteAdd'])->name('favorite.add');

Route::delete('favorite-remove/{id}', [PublicController::class, 'favoriteRemove'])->name('favorite.remove');

Route::get('wishlist', [PublicController::class, 'wishlist'])->name('wishlist');

// blog

Route::get('blog1', [PublicController::class, 'blog1'])->name('blog1');
