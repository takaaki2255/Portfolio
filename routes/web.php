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
Route::controller(PortfolioController::class) ->prefix('admin')
                                              ->group(function() {
    Route::get('portfolio/create', 'add');
});

// ProfileControllerとportfolio/createのルーティング
Route::controller(ProfileController::class) ->prefix('admin')
                                            ->group(function() {
    Route::get('profile/create', 'add');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
