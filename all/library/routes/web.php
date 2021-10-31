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

/*Route::get('/annuaires', function () {
    return view('etudiants');
})->name('annuaires.index');*/

Route::group(['middleware' => ['auth']], function(){
	Route::get('/', [App\Http\Controllers\BookController::class, 'collection'])->name('collection.index');
	Route::get('/getCollections', [App\Http\Controllers\BookController::class, 'getCollections'])->name('collection.search');
	Route::get('/annuaires', [App\Http\Controllers\ContactController::class, 'index'])->name('annuaires.index');
	Route::get('/getAnnuaires', [App\Http\Controllers\ContactController::class, 'getAnnuaires'])->name('annuaires.search');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile.info');
Route::post('/profile', [App\Http\Controllers\HomeController::class, 'postProfile'])->name('profile.update');

/*** Biblio ***/
Route::group(['middleware' => ['auth']], function(){
	Route::get('/collection', [App\Http\Controllers\BookController::class, 'collection'])->name('collection.index');
	Route::get('/collection/download', [App\Http\Controllers\BookController::class, 'downloadEbook'])->name('download.ebook');
	Route::get('/detail/{id}', [App\Http\Controllers\BookController::class, 'detail'])->name('collection.detail');
//Route::post('/search', [App\Http\Controllers\BookController::class, 'search'])->name('collection.search');
});

/** CATCH-ALL ROUTE for Backpack/PageManager - needs to be at the end of your routes.php file  **/
//Route::get('{page}/{subs?}', ['uses' => '\App\Http\Controllers\PageController@index'])
    //->where(['page' => '^(((?=(?!admin))(?=(?!\/)).))*$', 'subs' => '.*']);
