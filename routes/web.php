<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use Laravel\Sanctum\NewAccessToken;
use App\Models\Post;


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


Route::get('/', [DataController::class,'index']);

Route::get('/tambahEvent', [DataController::class,'page']);
Route::post('/tambahEvent/simpan',[DataController::class,'simpan'])->name('tambahEvent.simpan');

Route::get('/detail',[DataController::class,'detail']);

Route::get('/event', [DataController::class,'event']);
Route::get('/news', [DataController::class,'news']);
Route::get('posts/{slug}', [DataController::class,'news1']);
Route::get('posts2/{slug}', [DataController::class,'news2']);
