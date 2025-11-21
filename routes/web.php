<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

// Video Budaya
Route::get('/video-budaya', function () {
    return view('fitur.video-budaya');
})->name('video.budaya');

// Bahasa Daerah
Route::get('/bahasa-daerah', function () {
    return view('fitur.bahasa-daerah');
})->name('bahasa.daerah');

// Literatur Budaya
Route::get('/literatur-budaya', function () {
    return view('fitur.literatur-budaya');
})->name('literatur.budaya');

// Kuliner Tradisional
Route::get('/kuliner-tradisional', function () {
    return view('fitur.kuliner-tradisional');
})->name('kuliner.tradisional');

// Pertunjukan Budaya
Route::get('/pertunjukan-budaya', function () {
    return view('fitur.pertunjukan-budaya');
})->name('pertunjukan.budaya');

// Cagar Budaya (BARU)
Route::get('/cagar-budaya', function () {
    return view('fitur.cagar-budaya');
})->name('cagar.budaya');

Route::get('/jadwal-pertunjukan', function () {
    return view('fitur.jadwal');
});