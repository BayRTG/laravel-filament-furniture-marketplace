@extends('layouts.public')

@section('title')
    @if($selectedCategory)
        Katalog: {{ $selectedCategory->name }} | Toko Kayu Mas Aji
    @else
        Katalog Produk | Toko Kayu Mas Aji
    @endif
@endsection

@section('meta_description')
    @if($selectedCategory)
        Katalog produk kategori {{ $selectedCategory->name }}. Konsultasi dan pemesanan via WhatsApp.
    @else
        Katalog produk Toko Kayu Mas Aji. Konsultasi dan pemesanan via WhatsApp.
    @endif
@endsection

@section('content')
    {{-- Header section --}}
    <section class="border-b bg-slate-50">
        <x-container class="py-10">
            <div class="max-w-3xl">
                <div class="text-xs uppercase tracking-widest text-slate-500">Katalog</div>
                <h1 class="mt-2 text-3xl font-extrabold tracking-tight">Produk</h1>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                    @if($selectedCategory)
                        Menampilkan kategori: <span class="font-semibold text-slate-900">{{ $selectedCategory->name }}</span>.
                    @else
                        Pilih kategori untuk mempersempit produk, lalu klik produk untuk detail dan pesan via WhatsApp.
                    @endif
                </p>
            </div>
        </x-container>
    </section>

    <x-container class="py-10">
        {{-- Filter chips --}}
        <div class="flex flex-wrap gap-2">
            <a href="{{ route('products.index') }}"
               class="rounded-full px-4 py-2 text-sm font-semibold border transition
               {{ !$selectedCategory ? 'bg-amber-800 text-white border-amber-800' : 'bg-white text-slate-700 hover:bg-slate-50' }}">
                Semua
            </a>

            @foreach($categories as $cat)
                <a href="{{ route('product.byCategory', $cat->slug) }}"
                   class="rounded-full px-4 py-2 text-sm font-semibold border transition
                   {{ $selectedCategory && $selectedCategory->id === $cat->id ? 'bg-amber-800 text-white border-amber-800' : 'bg-white text-slate-700 hover:bg-slate-50' }}">
                    {{ $cat->name }}
                </a>
            @endforeach
        </div>

        {{-- Grid --}}
        <div class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            @forelse($products as $product)
                <x-product-card :product="$product" />
            @empty
                <div class="rounded-2xl border bg-white p-6 text-sm text-slate-600">
                    Produk tidak ditemukan.
                </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="mt-8">
            {{ $products->links() }}
        </div>

        {{-- CTA bawah --}}
        <div class="mt-10 rounded-2xl border bg-slate-50 p-6 sm:p-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <div class="text-lg font-extrabold tracking-tight">Butuh rekomendasi produk?</div>
                <div class="mt-1 text-sm text-slate-600">Hubungi admin untuk konsultasi formal via WhatsApp.</div>
            </div>
            <x-button-wa label="Konsultasi WhatsApp" />
        </div>
    </x-container>
@endsection