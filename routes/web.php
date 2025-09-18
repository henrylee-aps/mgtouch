<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('index');
});
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');

Route::get('{any}',[DashboardController::class, 'index'])->where('any', '.*'); // Catch-all route for the dashboard.
