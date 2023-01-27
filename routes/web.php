<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/comics', [MainController::class, "index"])->name("comics.index");

Route::get("/comics/create", [MainController::class, "create"])->name("comics.create");

Route::get('/comics/{comic}', [MainController::class, "show"])->name("comics.show");

Route::post("/comics", [MainController::class, "store"])->name("comics.store");

Route::get("/comics/{comic}/edit", [MainController::class, "edit"])->name("comics.edit"); 

Route::put("/comics/{comic}", [MainController::class, "update"])->name("comics.update");

Route::delete("/comics/{comic}", [MainController::class, "destroy"])->name("comics.destroy");