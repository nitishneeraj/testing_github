<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\GstBillController;
use App\Http\Controllers\PartyController;
use Illuminate\Support\Facades\Route;


//Gst Billing
//Index Page
Route::get('/', [AppController::class, 'index']);

//Party route
Route::get('/add-party', [PartyController::class, 'addParty'])->name('add-party');
Route::post('/create-party', [PartyController::class, 'createParty'])->name('create-party');
Route::get('/edit-party/{id}', [PartyController::class, 'editParty'])->name('edit-party');
Route::put('/update-party/{id}', [PartyController::class, 'updateParty'])->name('update-party');
Route::delete('/delete-parties/{id}', [PartyController::class, 'destroyParty'])->name('delete-parties');
Route::get('/manage-parties', [PartyController::class, 'index'])->name('manage-parties');

//Gst bill routes
Route::get('/add-gst-bill', [GstBillController::class, 'addGstBill'])->name('add-gst-bill');
Route::get('/manage-gst-bills', [GstBillController::class, 'index'])->name('manage-gst-bills');
Route::get('/print-gst-bill', [GstBillController::class, 'print'])->name('print-gst-bill');
