<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ProfileController;

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

// PortfolioControllerとportfolio/createのルーティング
Route::controller(PortfolioController::class) ->prefix('admin') ->name('admin.')
 ->middleware('auth')->group(function () {
    Route::get('portfolio/create', 'add') ->name('portfolio.add');
    Route::post('portfolio/create', 'create') ->name('portfolio.create');
    Route::get('portfolio', 'index')->name('portfolio.index');
});


// ProfileControllerとprofile/createのルーティング
Route::controller(ProfileController::class) ->prefix('admin')->name('admin.')
 ->middleware('auth')->group(function() {
    Route::get('profile/create', 'add') ->name('profile.add');
    Route::post('profile/create', 'create') ->name('profile.create');
    Route::get('profile', 'indexs') ->name('profile.indexs');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 
            'index'])->name('home');
