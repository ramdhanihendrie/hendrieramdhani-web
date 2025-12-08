<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::controller(HomeController::class)->as('landing.')->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/service', 'service')->name('service');
    Route::get('/portolio', 'portfolio')->name('portfolio');
    Route::prefix('portfolio')->name('portfolio.')->group(function () {
        Route::get('/{slug}', 'portfolioDetail')->name('detail');
    });
    Route::get('/contact', 'contact')->name('contact');
});
