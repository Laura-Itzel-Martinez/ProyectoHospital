<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DiagnosticoController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/show/{paciente}' , [App\Http\Controllers\HomeController::class, 'show'])->name('show');
Route::get('/create' , [App\Http\Controllers\HomeController::class, 'create'])->name('create');
Route::post('/store' , [App\Http\Controllers\HomeController::class, 'store'])->name('store');
Route::get('/show/{paciente}' , [App\Http\Controllers\HomeController::class, 'show'])->name('show');
Route::get('/show/{paciente}/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::put('/udpate/{paciente}', [HomeController::class, 'update'])->name('update');
Route::delete('/{paciente}', [HomeController::class, 'destroy'])->name('destroy');

//----------------------------------------------------------------------------------------------------------------//


Route::get('/createDiagnostico' , [App\Http\Controllers\HomeController::class, 'createDiagnostico'])->name('createDiagnostico');
Route::post('/storeDiagnostico' , [App\Http\Controllers\HomeController::class, 'storeDiagnostico'])->name('storeDiagnostico');
//Route::put('/udpate/{diagnostico}', [App\Http\Controllers\DiagnosticoController::class, 'update'])->name('update');

