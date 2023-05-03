<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\DB;
use App\Models\Donor;

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

Route::get('/',function() {
    $donors = Donor::all();
    $jml_pendonor = count($donors);
    return view('index')
    ->with('jumlah', $jml_pendonor); 
})->name('home');

Route::post('/registrasi-pendonor',[DonorController::class, 'store'])->name('storeDonor');

Route::get('/daftar', [DonorController::class, 'createDonor'])->name('daftarDonor');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'auth'])->name('auth');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/index-admin', [AdminController::class, 'indexAdmin'])->name('indexAdmin');
Route::get('/daftar-pendonor', [PetugasController::class, 'indexPetugas'])->name('indexPetugas');

Route::get('create-response/{id}', [PetugasController::class, 'createResponse'])->name('createResponse');
Route::post('store-response/{id}', [PetugasController::class, 'storeResponse'])->name('storeResponse');

Route::get('edit-response/{id}', [PetugasController::class, 'editResponse'])->name('editResponse');
Route::post('update-response/{id}', [PetugasController::class, 'updateResponse'])->name('updateResponse');

Route::get('admin/cetak-pdf', [AdminController::class, 'cetakPdf'])->name('cetakPdf'); 

Route::get('admin/export-excel', [AdminController::class, 'exportExcel'])->name('exportExcel');

Route::get('admin/search', [AdminController::class, 'search'])->name('search');

