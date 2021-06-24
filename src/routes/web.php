<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KuisionerController;

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

Route::get('/kuisioner', [KuisionerController::class, 'showKuisioner'])->name('kuisioner');
Route::get('/formulir', [KuisionerController::class, 'showFormulir'])->name('formulir');


Route::get('/get-business-goals', [KuisionerController::class, 'getBusinessGoals'])->name('getBusinessGoals');
Route::get('/get-stakeholder', [KuisionerController::class, 'getStakeholder'])->name('getStakeholder');
Route::get('/get-it-goals', [KuisionerController::class, 'getItGoals'])->name('getItGoals');
Route::get('/get-it-process', [KuisionerController::class, 'getItProcess'])->name('getItProcess');
