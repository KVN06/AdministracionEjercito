<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArmycorpController;
use App\Http\Controllers\BarracksController;
use App\Http\Controllers\CompanyController;



Route::get('/formularioCuerpoEjercito', [ArmycorpController::class, 'create'])->name('formularioCuerpoEjercito');
Route::post('/crearCuerpo', [ArmycorpController::class, 'agg_corp'])->name('armycorp.ss');

Route::get('/formularioCuartel', [BarracksController::class, 'create'])->name('formularioCuartel');
Route::post('/crearCuartel', [BarracksController::class, 'agg_barracks'])->name('barracks.ss');

Route::get('/formularioCompania', [CompanyController::class, 'create'])->name('formularioCompania');
Route::post('/crearCompania', [CompanyController::class, 'agg_company'])->name('company.ss');






