<?php
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro', [App\Http\Controllers\RegistroController::class, 'showForm'])->name('registro.show');
Route::post('/registro', [App\Http\Controllers\RegistroController::class, 'registro'])->name('registro.result');
Route::delete('/registro/{indice}', [RegistroController::class, 'eliminarRegistro'])->name('registro.eliminar');