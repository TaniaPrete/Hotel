<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\SpaController;

// Route per la home
Route::get('/', [PageController::class, 'welcome'])->name('welcome');

// Rotte per il modulo di contatto
Route::get('/contact', function () {
    return view('layouts.contact');
})->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Route per FAQ (inclusa nella pagina Servizi)
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// Route per i servizi
Route::get('/services', function () {
    return view('services');
})->name('services');

// Route per la pagina Chi Siamo
Route::get('/whois', function () {
    return view('whois');
})->name('whois');

// Route per Lavora con Noi
Route::get('/work-with-us', function () {
    return view('work-with-us');
})->name('work-with-us');
Route::post('/work-with-us', [JobApplicationController::class, 'submitApplication'])->name('work-with-us.submit');

// Route per la galleria
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

// Rotte per SPA
Route::get('/spa', function () {
    return view('spa');
})->name('spa');
Route::get('/spa-booking', [SpaController::class, 'index'])->name('spa-booking');
Route::post('/confirm-spa-booking', [SpaController::class, 'confirm'])->name('confirm-spa-booking');

// Rotte per le Camere
Route::get('/rooms', function () {
    return view('rooms');
})->name('rooms');

// Rotte per la Ristorazione
Route::get('/dining', function () {
    return view('dining');
})->name('dining');

// Rotte per la prenotazione
Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::post('/confirm-booking', [BookingController::class, 'confirm'])->name('confirm_booking');
