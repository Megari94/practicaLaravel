<?php
use App\Http\Controllers\PromedioController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/promedio', [App\Http\Controllers\PromedioController::class, 'showForm'])->name('promedio.form');
//Route::get('/promedio', function () {
  //  return view('welcome');
//});
Route::post('/promedio', [App\Http\Controllers\PromedioController::class, 'promedio'])->name('promedio.result');