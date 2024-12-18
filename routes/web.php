<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WellcomeController;

Route::get('/',[WellcomeController::class,'index']);

Route::get('/about',[WellcomeController::class,'about']);

Route::get('/contact',[WellcomeController::class,'contact']);
Route::get('/myPortfolio',[WellcomeController::class,'myPortfolio']);
Route::get('/gallery',[WellcomeController::class,'gallery']);
