<?php

use App\Http\TA\Presentation\Controller\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::prefix('mahasiswa')->group(function (){
    Route::post('create', [MahasiswaController::class, 'createMahasiswa']);
    Route::post('update', [MahasiswaController::class, 'updateMahasiswa']);
});
