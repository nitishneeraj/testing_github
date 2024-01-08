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
Route::get('/manage-parties', [PartyController::class, 'index'])->name('manage-parties');

//Gst bill routes
Route::get('/add-gst-bill', [GstBillController::class, 'addGstBill'])->name('add-gst-bill');
Route::get('/manage-gst-bills', [GstBillController::class, 'index'])->name('manage-gst-bills');
Route::get('/print-gst-bill', [GstBillController::class, 'print'])->name('print-gst-bill');
