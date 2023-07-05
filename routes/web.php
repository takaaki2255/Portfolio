<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\PortfolioController as PublicPortfolioController;
use App\Http\Controllers\ProfileController as PublicProfileController;
use App\Http\Controllers\WelcomeController as PublicWelcomeController;

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
    Route::get('portfolio/edit', 'edit')->name('portfolio.edit');
    Route::post('portfolio/edit', 'update')->name('portfolio.update');
    Route::get('portfolio/delete', 'delete')->name('portfolio.delete');
});


// ProfileControllerとprofile/createのルーティング
Route::controller(ProfileController::class) ->prefix('admin')->name('admin.')
 ->middleware('auth')->group(function() {
    Route::get('profile/create', 'add') ->name('profile.add');
    Route::post('profile/create', 'create') ->name('profile.create');
    Route::get('profile', 'indexs') ->name('profile.indexs');
    Route::get('profile/edit', 'edit')->name('profile.edit');
    Route::post('profile/edit', 'update')->name('profile.update');
    Route::get('profile/delete', 'delete')->name('profile.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 
            'index'])->name('home');

Route::get('/portfolio', [PublicPortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/profile', [PublicProfileController::class, 'index'])->name('profile.index');
Route::get('/', [PublicWelcomeController::class, 'index'])->name('welcome.index');

Route::view('upload', 'upload');
Route::post('s3', [\App\Http\Controllers\S3Controller::class, 'uploadS3'])->name('s3');