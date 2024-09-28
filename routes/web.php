<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profileController;

Route::get('/profile/{id}',[profileController::class,'index']);