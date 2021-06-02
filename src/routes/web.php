<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PositionController;
use App\Http\Controllers\InstitutionController;

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

Route::get('/vagas', [PositionController::class, 'index'])->name('positions.index');

Route::get('/instituicao/create', [InstitutionController::class, 'create'])->name('institutions.create');

Route::post('/instituicao', [InstitutionController::class, 'store'])->name('cadastrarInstituicao');