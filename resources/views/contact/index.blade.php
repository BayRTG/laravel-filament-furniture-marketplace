@extends('layouts.public')

@section('title', 'Kontak & Lokasi | Toko Kayu Mas Aji')
@section('meta_description', 'Kontak dan lokasi Toko Kayu Mas Aji. Hubungi via WhatsApp atau datang langsung ke toko.')

@section('content')
    <section class="border-b bg-slate-50">
        <x-container class="py-10">
            <div class="max-w-3xl">
                <div class="text-xs uppercase tracking-widest text-slate-500">Hubungi Kami</div>
                <h1 class="mt-2 text-3xl font-extrabold tracking-tight">Kontak & Lokasi</h1>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                    Konsultasi dan pemesanan dilakukan via WhatsApp atau datang langsung ke toko.
                </p>
            </div>
        </x-container>
    </section>

    <x-container class="py-10">
        <div class="grid gap-6 lg:grid-cols-2">
            <div class="rounded-2xl border bg-white p-6">
                <div class="text-sm font-semibold text-slate-900">Kontak</div>

                <div class="mt-4 space-y-4 text-sm text-slate-700">
                    <div>
                        <div class="text-xs text-slate-500">WhatsApp</div>
                        <a class="font-semibold underline"
                           href="https://wa.me/{{ config('site.whatsapp_number') }}"
                           target="_blank" rel="noopener">
                            {{ config('site.whatsapp_number') }}
                        </a>
                    </div>

                    <div>
                        <div class="text-xs text-slate-500">Alamat Toko</div>
                        <div class="font-medium">
                            {{-- Alamat toko: (isi sendiri) --}}
                        </div>
                    </div>

                    <div>
                        <div class="text-xs text-slate-500">Jam Operasional</div>
                        <div class="font-medium">
                            {{-- Jam operasional: (isi sendiri) --}}
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <x-button-wa label="Konsultasi via WhatsApp" />
                </div>

                <div class="mt-4 text-xs text-slate-500">
                    {{-- Catatan: (isi sendiri) --}}
                </div>
            </div>

            <div class="rounded-2xl border bg-white p-6">
                <div class="text-sm font-semibold text-slate-900">Google Maps</div>
                <p class="mt-2 text-sm text-slate-600">
                    {{-- Deskripsi singkat lokasi/akses: (isi sendiri) --}}
                </p>

                <div class="mt-4 overflow-hidden rounded-xl border bg-slate-50">
                    <div class="aspect-[16/10]">
                        {{-- Tempel Google Maps embed iframe di sini (isi sendiri) --}}
                    </div>
                </div>

                <div class="mt-4 text-sm">
                    {{-- Link Google Maps (opsional, isi sendiri) --}}
                </div>
            </div>
        </div>

        <div class="mt-10 rounded-2xl border bg-slate-50 p-6 sm:p-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <div class="text-lg font-extrabold tracking-tight">Ingin tanya stok atau rekomendasi?</div>
                <div class="mt-1 text-sm text-slate-600">Kami bantu via WhatsApp dengan format formal.</div>
            </div>
            <x-button-wa label="Chat WhatsApp" />
        </div>
    </x-container>
@endsection