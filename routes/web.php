<?php

use GuzzleHttp\Middleware;
use App\Http\Middleware\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Middleware\InformasiRahasia;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\PrivateNoteController;

Route::get('/pw', [UserAuthController::class, 'bikinpw']) ->name('bikinpw');

//login
Route::get('/login', function () {return view('login');})->name('login');
Route::post('/auth', [UserAuthController::class, 'login']) ->name('login-act');
Route::post('/logout', [UserAuthController::class, 'logout']) ->name('logout');


//untuk membuat middleware kelompok/grup
Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {return view('home');}) ->name('home');
//catatan
    //read/show
    Route::get('/notes', [NoteController::class,'show']) ->name('notes');
    //create
    Route::get('/form', [NoteController::class,'form']) ->name('form');
    Route::post('/create', [NoteController::class,'create']) ->name('create');
    //update
    Route::get('/update-form/{id}', [NoteController::class,'update_form']) ->name('update-form');
    Route::post('/update/{id}', [NoteController::class,'update']) ->name('update');
    //delete
    Route::get('/delete/{id}', [NoteController::class,'delete_note']) ->name('delete');

    
    Route::get('/privatenotes', [PrivateNoteController::class,'show']) ->name('private-note');
    Route::get('/adminShow', [PrivateNoteController::class,'adminShow']) ->name('hanya-admin') ->Middleware(Role::class);

});

//fitur informasi
Route::get('/informasi', function(){return view('informasi.utama');}) ->name('info-index')->middleware(InformasiRahasia::class);
Route::get('/validasi1', [InformasiController::class, 'validasi1']) ->name('validasi1') ->middleware(InformasiRahasia::class);
Route::get('/validasi2', [InformasiController::class, 'validasi2']) ->name('validasi2') ->middleware(InformasiRahasia::class);
Route::get('/info1', function(){return view('informasi.info1');}) ->name('info1') ->Middleware(InformasiRahasia::class);
Route::get('/info2', function(){return view('informasi.info2');}) ->name('info2') ->middleware(InformasiRahasia::class);
Route::get('/salah-kode', [InformasiController::class, 'salah']) ->name('salah')->middleware(InformasiRahasia::class);
Route::get('/end', [InformasiController::class, 'akhiriSesi']) ->name('akhiriSesi')->middleware(InformasiRahasia::class);






