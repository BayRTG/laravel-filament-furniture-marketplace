<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ()
    {
        $categories = Category::where('is_active', true)
            ->orderBy('name')
            ->get();

        $products = Product::where('is_active', true)
            ->latest()
            ->paginate(9);

        $selectedCategory = null;

        return view('products.index', compact('products', 'categories', 'selectedCategory'));
    }

    public function byCategory(string $slug)
    {
        $categories = Category::where('is_active', true)
            ->orderBy('name')
            ->get();

        $selectedCategory = Category::where('is_active', true)
            ->where('slug', $slug)
            ->firstOrFail();

        $products = Product::where('is_active', true)
            ->where('category_id', $selectedCategory->id)
            ->latest()
            ->paginate(9);

        return view('products.index', compact('products', 'categories', 'selectedCategory'));
    }

    public function show(string $slug)
    {
        $product = Product::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('products.show', compact('product'));
    }
}