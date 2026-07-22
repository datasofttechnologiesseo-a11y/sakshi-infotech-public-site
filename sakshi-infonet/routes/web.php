<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services/{slug}', [PageController::class, 'serviceShow'])->name('service.show');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');
Route::post('/contact-us', [PageController::class, 'contactSubmit'])->name('contact.submit');

// SEO helpers
Route::get('/sitemap.xml', function () {
    $lastmod = now()->toDateString();

    $urls = [
        ['loc' => route('home'),     'priority' => '1.0', 'freq' => 'weekly',  'lastmod' => $lastmod],
        ['loc' => route('about'),    'priority' => '0.8', 'freq' => 'monthly', 'lastmod' => $lastmod],
        ['loc' => route('services'), 'priority' => '0.9', 'freq' => 'weekly',  'lastmod' => $lastmod],
        ['loc' => route('contact'),  'priority' => '0.7', 'freq' => 'monthly', 'lastmod' => $lastmod],
    ];

    foreach (config('site.services') as $service) {
        $urls[] = ['loc' => route('service.show', $service['slug']), 'priority' => '0.8', 'freq' => 'monthly', 'lastmod' => $lastmod];
    }

    return response()
        ->view('sitemap', ['urls' => $urls])
        ->header('Content-Type', 'application/xml');
})->name('sitemap');
