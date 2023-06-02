<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OptionController;
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
    return view('home');
});

Route::post('store', [OptionController::class,'store']);
Route::post('store_two', [OptionController::class,'store_two']);
Route::post('store_three', [OptionController::class,'store_three']);
Route::get('show-details',[OptionController::class, 'index'])->name('show-details');
Route::get('data_center/{id}',[OptionController::class, 'show'])->name('data_center');

Route::delete('/delete/{id}', [OptionController::class, 'deleteStepTwo'])->name('step-two.destroy');
Route::get('/step-two/edit/{id}', [OptionController::class, 'getStepTwo'])->name('step-two.edit');
Route::put('/step-two/update/{id}', [OptionController::class, 'updateStepTwo'])->name('step-two.update');
Route::get('View_file/{img}', [OptionController::class,'open_file'])->name('open_file');
Route::get('download/{img}', [OptionController::class,'get_file'])->name('download');
Route::delete('delete_file/{id}', [OptionController::class, 'destroy'])->name('delete_file');
Route::delete('delete_table/{id}', [OptionController::class, 'delete'])->name('delete_table');
Route::delete('delete_person/{id}', [OptionController::class, 'destroyperson'])->name('delete_person');
