<?php

use App\Http\Controllers\BreweryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, "welcome"] )->name("welcome");
// ROTTE PER BIRRERIE

Route::get("/brewery/index" , [BreweryController::class, "index"])->name("breweryIndex");
Route::get("/brewery/create" , [BreweryController::class, "create"])->name("breweryCreate");
Route::post("/brewery/store", [BreweryController::class, "store"])->name("breweryStore");
Route::get("/brewery/show/{brewery}", [BreweryController::class,"show"])->name("breweryShow");