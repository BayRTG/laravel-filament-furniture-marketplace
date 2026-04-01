@extends('layouts.public')

@section('title', 'Toko Kayu Mas Aji | Kebutuhan Kayu & Proyek')
@section('meta_description', 'Toko Kayu Mas Aji menyediakan kebutuhan kayu dan layanan proyek. Konsultasi & pemesanan via WhatsApp atau datang ke toko.')

@section('content')
    {{-- HERO (background image + overlay seperti referensi) --}}
    <section class="relative overflow-hidden border-b">
        {{-- Letakkan foto hero di: public/images/hero.jpg --}}
        <div class="absolute inset-0">
            <div class="h-full w-full bg-slate-200">
                <img
                    src="{{ asset('images/hero.jpg') }}"
                    alt="Toko Kayu Mas Aji"
                    class="h-full w-full object-cover"
                    onerror="this.style.display='none';"
                >
            </div>
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-black/15"></div>
        </div>

        <x-container class="relative py-16 sm:py-20">
            <div class="max-w-2xl text-white">
                <div class="text-xs uppercase tracking-widest text-white/80">
                    {{ config('site.site_name', 'Toko Kayu Mas Aji') }}
                </div>

                <h1 class="mt-3 text-4xl font-extrabold tracking-tight sm:text-5xl leading-tight">
                    Tangan ahli, hasil kayu yang rapi dan tahan lama
                </h1>

                <p class="mt-5 text-white/85 leading-relaxed">
                    Melayani kebutuhan kayu dan pengerjaan proyek. Konsultasi formal, cepat, dan jelas via WhatsApp—atau datang langsung ke toko.
                </p>

                <div class="mt-7 flex flex-wrap gap-3">
                    <x-button-wa label="Konsultasi via WhatsApp" />
                    <a href="{{ route('products.index') }}"
                       class="inline-flex items-center justify-center rounded-lg border border-white/40 bg-white/10 px-4 py-2 text-sm font-semibold text-white hover:bg-white/15">
                        Lihat Katalog
                    </a>
                    <a href="{{ route('portfolio.index') }}"
                       class="inline-flex items-center justify-center rounded-lg border border-white/40 bg-white/10 px-4 py-2 text-sm font-semibold text-white hover:bg-white/15">
                        Lihat Portfolio
                    </a>
                </div>

                <div class="mt-6 text-sm text-white/70">
                    {{-- Alamat / jam operasional: (isi sendiri) --}}
                </div>
            </div>
        </x-container>
    </section>

    {{-- FEATURES (4 kartu seperti referensi) --}}
    <section class="bg-[#f6f1ea]">
        <x-container class="py-10">
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @php
                    $features = [
                        ['title' => 'Detail Rapi', 'desc' => 'Finishing lebih presisi untuk hasil yang enak dilihat dan dipakai.'],
                        ['title' => 'Material Berkualitas', 'desc' => 'Pemilihan material disesuaikan kebutuhan penggunaan dan budget.'],
                        ['title' => 'Layanan Personal', 'desc' => 'Konsultasi kebutuhan, ukuran, dan rekomendasi yang paling cocok.'],
                        ['title' => 'Harga Masuk Akal', 'desc' => 'Penawaran jelas dan transparan sesuai spesifikasi.'],
                    ];
                @endphp

                @foreach($features as $i => $f)
                    <div class="rounded-2xl border {{ $i < 3 ? 'bg-[#b58a63] text-white border-[#b58a63]' : 'bg-white text-slate-900' }} p-5">
                        <div class="font-semibold">{{ $f['title'] }}</div>
                        <p class="mt-2 text-sm {{ $i < 3 ? 'text-white/85' : 'text-slate-600' }}">
                            {{ $f['desc'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </x-container>
    </section>

    {{-- “OUR SERVICES” style (3 kartu dengan gambar + CTA) --}}
    <section>
        <x-container class="py-12">
            <div class="text-center">
                <h2 class="text-2xl font-extrabold tracking-tight">Layanan</h2>
                <p class="mt-2 text-sm text-slate-600">
                    Pilih layanan yang Anda butuhkan, lalu minta penawaran via WhatsApp.
                </p>
            </div>

            @php
                // Letakkan gambar layanan di public/images/services-1.jpg dst, atau biarkan kosong (akan tampil blok).
                $services = [
                    ['title' => 'Kusen, Pintu & Komponen Kayu', 'desc' => 'Pembuatan/penyediaan komponen sesuai kebutuhan rumah dan proyek.', 'img' => 'images/services-1.jpg'],
                    ['title' => 'Pengerjaan & Renovasi Proyek', 'desc' => 'Dukungan kebutuhan kayu untuk pekerjaan lapangan dan finishing.', 'img' => 'images/services-2.jpg'],
                    ['title' => 'Perbaikan & Restorasi', 'desc' => 'Perbaikan bagian kayu tertentu agar kembali rapi dan berfungsi.', 'img' => 'images/services-3.jpg'],
                ];
            @endphp

            <div class="mt-8 grid gap-6 lg:grid-cols-3">
                @foreach($services as $s)
                    <div class="overflow-hidden rounded-2xl border bg-white">
                        <div class="aspect-[16/11] bg-slate-100">
                            <img src="{{ asset($s['img']) }}"
                                 alt="{{ $s['title'] }}"
                                 class="h-full w-full object-cover"
                                 onerror="this.style.display='none';" />
                        </div>
                        <div class="p-6">
                            <div class="font-semibold">{{ $s['title'] }}</div>
                            <p class="mt-2 text-sm text-slate-600 leading-relaxed">{{ $s['desc'] }}</p>

                            @php
                                $msg = "Halo Admin Toko Kayu Mas Aji, saya ingin meminta penawaran untuk layanan: {$s['title']}. Mohon info langkah berikutnya.";
                            @endphp

                            <div class="mt-4">
                                <x-button-wa :message="$msg" label="Minta Penawaran" />
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </x-container>
    </section>

    {{-- ABOUT + EXPERIENCE band (mirip referensi: gambar + badge pengalaman) --}}
    <section class="bg-[#f6f1ea] border-y">
        <x-container class="py-12">
            <div class="grid gap-8 lg:grid-cols-2 lg:items-center">
                <div class="relative">
                    {{-- Letakkan foto about di public/images/about.jpg --}}
                    <div class="overflow-hidden rounded-2xl border bg-slate-100">
                        <div class="aspect-[16/11]">
                            <img src="{{ asset('images/about.jpg') }}"
                                 alt="Pengerjaan kayu"
                                 class="h-full w-full object-cover"
                                 onerror="this.style.display='none';" />
                        </div>
                    </div>

                    <div class="absolute -bottom-5 left-5 rounded-2xl bg-white px-5 py-4 shadow-sm border">
                        <div class="text-3xl font-extrabold text-[#b58a63]">20+</div>
                        <div class="text-xs font-semibold text-slate-700 tracking-wide">TAHUN PENGALAMAN</div>
                        {{-- Ubah angka/teks: (isi sendiri) --}}
                    </div>
                </div>

                <div class="pt-6 lg:pt-0">
                    <h2 class="text-2xl font-extrabold tracking-tight">
                        Custom woodwork, disesuaikan untuk kebutuhan Anda
                    </h2>
                    <p class="mt-4 text-sm text-slate-700 leading-relaxed">
                        {{-- Profil usaha / komitmen kualitas: (isi sendiri) --}}
                        Kami fokus pada hasil yang rapi, pemilihan material yang tepat, dan komunikasi yang jelas agar kebutuhan Anda terpenuhi sesuai spesifikasi.
                    </p>

                    <div class="mt-6 flex flex-wrap gap-3">
                        <x-button-wa label="Konsultasi Proyek" :message="'Halo Admin Toko Kayu Mas Aji, saya ingin konsultasi kebutuhan proyek kayu. Mohon arahan dan informasi yang diperlukan.'" />
                        <a href="{{ route('portfolio.index') }}"
                           class="inline-flex items-center justify-center rounded-lg border px-4 py-2 text-sm font-semibold hover:bg-white/60">
                            Lihat Dokumentasi Proyek
                        </a>
                    </div>
                </div>
            </div>
        </x-container>
    </section>

    {{-- PRODUK TERBARU (6) --}}
    <section>
        <x-container class="py-12">
            <div class="flex items-end justify-between gap-4">
                <div>
                    <h2 class="text-2xl font-extrabold tracking-tight">Produk Terbaru</h2>
                    <p class="mt-2 text-sm text-slate-600">Beberapa produk terbaru yang tersedia.</p>
                </div>
                <a class="text-sm font-semibold hover:underline" href="{{ route('products.index') }}">
                    Lihat semua →
                </a>
            </div>

            <div class="mt-7 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @forelse($featuredProducts as $product)
                    <x-product-card :product="$product" />
                @empty
                    <div class="text-sm text-slate-600">Produk belum tersedia.</div>
                @endforelse
            </div>
        </x-container>
    </section>

    {{-- PORTFOLIO PREVIEW (3 terbaru) + CTA --}}
    <section class="bg-slate-950 text-white">
        <x-container class="py-12">
            <div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <h2 class="text-2xl font-extrabold tracking-tight">Portfolio Proyek</h2>
                    <p class="mt-2 text-sm text-white/75">
                        Dokumentasi beberapa proyek yang pernah kami kerjakan.
                    </p>
                </div>

                <a href="{{ route('portfolio.index') }}"
                   class="inline-flex items-center justify-center rounded-lg bg-white px-4 py-2 text-sm font-semibold text-slate-900 hover:bg-white/90">
                    Lihat Semua Portfolio
                </a>
            </div>

            <div class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @forelse($latestPortfolios as $portfolio)
                    <div class="rounded-2xl border border-white/10 bg-white/5 overflow-hidden">
                        <a href="{{ route('portfolio.show', $portfolio->slug) }}" class="block">
                            <div class="aspect-[16/11] bg-white/10">
                                @if(!empty($portfolio->image))
                                    <img src="{{ asset('storage/'.$portfolio->image) }}"
                                         alt="{{ $portfolio->title }}"
                                         class="h-full w-full object-cover" />
                                @endif
                            </div>
                            <div class="p-5">
                                <div class="font-semibold">{{ $portfolio->title }}</div>
                                <div class="mt-2 text-sm text-white/75">
                                    {{ $portfolio->description }}
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="text-sm text-white/75">Portfolio belum tersedia.</div>
                @endforelse
            </div>

            <div class="mt-8 rounded-2xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <div class="font-semibold">Butuh estimasi atau rekomendasi?</div>
                    <div class="mt-1 text-sm text-white/70">Hubungi admin untuk konsultasi formal via WhatsApp.</div>
                </div>
                <x-button-wa
                    label="Chat WhatsApp"
                    :message="'Halo Admin Toko Kayu Mas Aji, saya ingin konsultasi dan meminta estimasi untuk kebutuhan kayu/proyek. Mohon info langkah berikutnya.'"
                />
            </div>
        </x-container>
    </section>
@endsection