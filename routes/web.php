<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

Route::get('/categories/index',[CategorieController::class,'index']);

Route::get('/categories/create',[CategorieController::class,'create'])->name('categories.create');

// Route::post('/categorie',[CategorieController::class,'store']);

Route::post('/categorie',[CategorieController::class,'store'])->name('categories.store');

Route::put('/categorie/{categorie}',[CategorieController::class,'update'])->name('categories.update');

Route::post('/categorie/{{}}',[CategorieController::class,'destroy']);