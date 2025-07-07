<?php

use Illuminate\Support\Facades\Route;

// Página de inicio
Route::get('/', function () {
    return view('home');
})->name('home');

// Quiénes somos
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

// programs
Route::get('/formation', function () {
    return view('programs.formation');
})->name('formacion');

Route::get('/employment', function () {
    return view('programs.employment');
})->name('employment');

Route::get('/services', function () {
    return view('programs.services');
})->name('services');

Route::get('/volunteering', function () {
    return view('programs.volunteering');
})->name('volunteering');

// Trabaja con nosotros
Route::get('/work-with-us', function () {
    return view('work-with-us');
})->name('work-with-us');

// Galería
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

// Transparencia
Route::get('/transparency', function () {
    return view('transparency');
})->name('transparency');