<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PemilihController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ChartController;
use Illuminate\Support\Facades\Auth;


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


Auth::routes();

Route::get('/',[ProgramController::class, 'index'])->name('index');


Route::group(['middleware'=>['auth','adminmiddleware:0']], function(){

    Route::get('/user', [PemilihController::class, 'index'])->name('user.index');
    Route::resource('siswa', SiswaController::class,);



Route::get('/basket',[PemilihController::class, 'basket'])->name('admin.basket');
Route::get('/tenis',[PemilihController::class, 'tenis'])->name('admin.tenis');
Route::get('/bola',[PemilihController::class, 'bola'])->name('admin.bola');
Route::get('/voli',[PemilihController::class, 'voli'])->name('admin.voli');
Route::get('/renang',[PemilihController::class, 'renang'])->name('admin.renang');
Route::get('/estafet',[PemilihController::class, 'estafet'])->name('admin.estafet');
Route::get('/bahasajerman',[PemilihController::class, 'bahasajerman'])->name('admin.bahasajerman');

// export pdf
Route::get('/exportpdf',[PemilihController::class, 'exportpdf'])->name('exportpdf');

//edit
Route::get('/edit/{id}', [PemilihController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [PemilihController::class, 'update'])->name('update');
Route::delete('/pemilih/{id}', [PemilihController::class, 'destroy'])->name('admin.data');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index'])->name('home.siswa');

Route::get('/data', [ProgramController::class, 'showprogram'])->name('siswa.dataexschool');

Route::get('/exn', [ProgramController::class, 'create'])->name('excshool.create');
Route::post('/exn', [ProgramController::class, 'store'])->name('excshool.store');

Route::get('/program/edit/{id}', [ProgramController::class, 'edit'])->name('siswa.editexschool');
Route::post('/program/update/{id}', [ProgramController::class, 'update'])->name('siswa.updateexschool');
Route::delete('/program/{id}', [ProgramController::class, 'destroy'])->name('siswa.destroyexschool');





});



Route::group(['middleware'=>['auth','adminmiddleware:0']], function(){
// ChartController
Route::get('/chartt', [ChartController::class, 'showChart'])->name('chart.index');
Route::get('/chart', [ChartController::class, 'getExschoolCounts']);

});


// users
Route::get('/sbola',[PemilihController::class, 'sbola'])->name('users.bola');
Route::get('/sbasket',[PemilihController::class, 'sbasket'])->name('users.basket');
Route::get('/svoli',[PemilihController::class, 'svoli'])->name('users.voli');
Route::get('/stenis',[PemilihController::class, 'stenis'])->name('users.tenis');
Route::get('/srenang',[PemilihController::class, 'srenang'])->name('users.renang');
Route::get('/sestafet',[PemilihController::class, 'sestafet'])->name('users.estafet');
Route::get('/sbahasajerman',[PemilihController::class, 'sbahasajerman'])->name('users.bahasajerman');

Route::get('/exnshow/{id}', [ProgramController::class, 'show'])->name('excshool.show');

Route::get('/home', [PemilihController::class, 'create'])->name('user.create');
Route::get('/input',[PemilihController::class, 'create'])->name('user.create');
// Route::post('/input',[PemilihControler::class, 'store'])->name('user.store');
Route::post('/input', [PemilihController::class, 'store'])->name('user.store');
