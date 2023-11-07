<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;

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

Route::get('/', [TitleController::class, 'index']);
Route::get('/titles/create', [TitleController::class, 'create']);
Route::post('/titles', [TitleController::class, 'store']);

/* Route::get('/game', function () {
    return view('game');
});

Route::get('/title', function () {
    $busca = request('search');
    return view('title', ['busca' => $busca]);
});

Route::get('/title_test/{id?}', function ($id = null) {
    return view('titles', ['id' => $id]);
}); */