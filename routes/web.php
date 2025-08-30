<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;



Route::get('/',[PageController::class,'index'])->name('index');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/projects',[PageController::class,'projects'])->name('projects');
Route::get('/resume',[PageController::class,'resume'])->name('resume');

Route::post('/contact_information_store',[PageController::class,'contact_information_store'])->name('contact_information_store');

Route::get('/confirmation_page',[PageController::class,'show_confirmation_page']);