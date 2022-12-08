<?php

use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;
use App\Models\Animal;


// ALL ANIMALS //
Route::get('/', [AnimalController::class, 'index']);


// SINGLE ANIMALS //
Route::get('/animals/{animal}', [AnimalController::class, 'show']);







