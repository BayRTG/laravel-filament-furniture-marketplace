@php
    $linkBase = "text-sm font-semibold transition";
    $linkIdle = "text-slate-700 hover:text-slate-900 hover:underline";
    $linkActive = "text-amber-800 underline underline-offset-4";
@endphp

<header class="sticky top-0 z-50 border-b bg-white/90 backdrop-blur">
    <x-container class="flex items-center justify-between py-3">
        <a href="{{ route('home') }}" class="font-extrabold tracking-tight">
            {{ config('site.site_name', 'Toko Kayu Mas Aji') }}
        </a>

        <nav class="hidden md:flex items-center gap-6">
            <a class="{{ $linkBase }} {{ request()->routeIs('home') ? $linkActive : $linkIdle }}"
               href="{{ route('home') }}">Home</a>

            <a class="{{ $linkBase }} {{ request()->routeIs('products.*','product.byCategory') ? $linkActive : $linkIdle }}"
               href="{{ route('products.index') }}">Katalog</a>

            <a class="{{ $linkBase }} {{ request()->routeIs('portfolio.*') ? $linkActive : $linkIdle }}"
               href="{{ route('portfolio.index') }}">Portfolio</a>

            <a class="{{ $linkBase }} {{ request()->routeIs('contact.index') ? $linkActive : $linkIdle }}"
               href="{{ route('contact.index') }}">Kontak</a>
        </nav>

        <div class="flex items-center gap-3">
            <div class="hidden sm:block">
                <x-button-wa label="WhatsApp" />
            </div>

            {{-- tombol menu mobile (placeholder kalau nanti mau dibuat) --}}
            <div class="md:hidden">
                <a href="{{ route('contact.index') }}"
                   class="rounded-lg border px-3 py-2 text-sm font-semibold hover:bg-slate-50">
                    Menu
                </a>
            </div>
        </div>
    </x-container>
</header>