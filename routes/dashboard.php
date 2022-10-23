<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard\CategorieController;



Route::get('/dashboard/categorie/archive',[CategorieController::class,'archive'])->name('categorie.archive');
Route::get('/dashboard/categorie/restore{id}',[CategorieController::class,'restore'])->name('categorie.restore');
Route::get('/dashboard/categorie/force{id}',[CategorieController::class,'force'])->name('categorie.force');


Route::resource('dashboard/categorie',CategorieController::class);


Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');


?>

