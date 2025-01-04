<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController; // Sposta questa dichiarazione sopra le route
use Illuminate\Support\Facades\Route;

// Route GET per la home
Route::get('/', [PageController::class, 'welcome'])->name('welcome');

// Route GET per visualizzare il modulo di contatto
Route::get('/contact', function () {
    return view('layouts.contact');
})->name('contact');

// Route POST per inviare il modulo di contatto
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Route GET per la pagina FAQ
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// Route GET per la pagina Servizi
Route::get('/services', function () {
    return view('services');
})->name('services');


// Route GET per la pagina Chi Siamo
Route::get('/whois', function () {
    return view('whois');
})->name('whois');

// Route GET per la pagina Lavora con Noi
Route::get('/work-with-us', function () {
    return view('work-with-us');
})->name('work-with-us');


// Route POST per inviare il modulo di candidatura
Route::post('/work-with-us', [ContactController::class, 'submitApplication'])->name('work-with-us.submit');


Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');


