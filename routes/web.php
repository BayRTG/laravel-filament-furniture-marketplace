<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PortfolioController;
use App\Models\Product;
use App\Models\Portfolio;

Route::get('/', function () {
    $featuredProducts = Product::where('is_active', true)
        ->latest()
        ->take(6)
        ->get();

    $latestPortfolios = Portfolio::where('is_active', true)
        ->latest()
        ->take(3)
        ->get();

    return view('home', compact('featuredProducts', 'latestPortfolios'));
})->name('home');

Route::get('/produk', [ProductController::class, 'index'])->name('products.index');

Route::get('/produk/kategori/{slug}', [ProductController::class, 'byCategory'])
    ->where('slug', '[A-Za-z0-9-]+')
    ->name('product.byCategory');

Route::get('/produk/{slug}', [ProductController::class, 'show'])
    ->where('slug', '[A-Za-z0-9-]+')
    ->name('products.show');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');

Route::get('/portfolio/{slug}', [PortfolioController::class, 'show'])
    ->where('slug', '[A-Za-z0-9-]+')
    ->name('portfolio.show');

// Route kontak
Route::view('/kontak', 'contact.index')->name('contact.index');