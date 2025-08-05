<?php

use App\Http\Controllers\Bin2DecController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bin2dec',[Bin2DecController::class, 'index']);
# ini untuk menampilkan form Bin2Dec
Route::post('/bin2dec',[Bin2DecController::class, 'convert'])->name('bin2dec.convert');
# ini untuk menyimpan/memproses data