@extends('layouts.public')

@section('title', $product->name.' | Toko Kayu Mas Aji')
@section('meta_description', 'Detail produk '.$product->name.'. Konsultasi dan pemesanan via WhatsApp.')

@section('content')
    <section class="border-b bg-slate-50">
        <x-container class="py-8">
            <div class="text-xs text-slate-500">
                <a class="hover:underline" href="{{ route('products.index') }}">Katalog</a>
                <span class="mx-2">/</span>
                <span class="text-slate-700">{{ $product->name }}</span>
            </div>
            <h1 class="mt-2 text-3xl font-extrabold tracking-tight">{{ $product->name }}</h1>
        </x-container>
    </section>

    <x-container class="py-10">
        <div class="grid gap-8 lg:grid-cols-2 lg:items-start">
            <div class="rounded-2xl border bg-white overflow-hidden">
                <div class="aspect-[4/3] bg-slate-100">
                    @if(!empty($product->image))
                        <img src="{{ asset('storage/'.$product->image) }}"
                             alt="{{ $product->name }}"
                             class="h-full w-full object-cover" />
                    @endif
                </div>
            </div>

            <div class="space-y-6">
                <div class="rounded-2xl border bg-white p-6">
                    <div class="text-sm font-semibold text-slate-900">Deskripsi</div>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        {{ $product->description }}
                    </p>
                </div>

                <div class="rounded-2xl border bg-white p-6">
                    <div class="text-sm font-semibold text-slate-900">Spesifikasi</div>
                    <div class="mt-2 text-sm text-slate-600">
                        {{-- Spesifikasi detail: (isi sendiri) --}}
                        Silakan hubungi admin untuk detail ukuran, stok, dan harga.
                    </div>
                </div>

                @php
                    $waMessage = "Halo Admin Toko Kayu Mas Aji, saya ingin memesan/menanyakan produk: {$product->name}. Mohon info harga dan ketersediaan.";
                @endphp

                <div class="rounded-2xl border bg-slate-50 p-6">
                    <div class="font-semibold">Pesan / Konsultasi</div>
                    <p class="mt-1 text-sm text-slate-600">
                        Kirim pesan formal otomatis dengan nama produk.
                    </p>

                    <div class="mt-4 flex flex-wrap gap-3">
                        <a href="https://wa.me/{{ config('site.whatsapp_number') }}?text={{ urlencode($waMessage) }}"
                           target="_blank" rel="noopener"
                           class="inline-flex items-center justify-center rounded-lg bg-amber-800 px-4 py-2 text-sm font-semibold text-white hover:bg-amber-900">
                            Pesan via WhatsApp
                        </a>

                        <a href="{{ url()->previous() }}"
                           class="inline-flex items-center justify-center rounded-lg border px-4 py-2 text-sm font-semibold hover:bg-white">
                            Kembali
                        </a>
                    </div>

                    <div class="mt-3 text-xs text-slate-500">
                        {{-- Catatan tambahan: (isi sendiri) --}}
                    </div>
                </div>
            </div>
        </div>
    </x-container>
@endsection