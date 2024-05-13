<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'viewContactList']);
Route::get('/add-contact', [ContactController::class, 'viewAddContact']);
Route::get('/single-contact/{contact}', [ContactController::class, 'viewSingleContact']);

Route::post('/add-contact', [ContactController::class, 'addContact']);