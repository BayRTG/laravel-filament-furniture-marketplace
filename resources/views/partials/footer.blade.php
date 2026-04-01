<footer class="border-t">
    <x-container class="py-10 grid gap-8 md:grid-cols-3">
        <div>
            <div class="font-semibold">{{ config('site.site_name', 'Toko Kayu Mas Aji') }}</div>
            <p class="mt-2 text-sm text-slate-600">
                Kebutuhan kayu dan proyek. Konsultasi & pemesanan via WhatsApp.
            </p>
        </div>

        <div>
            <div class="font-semibold">Menu</div>
            <ul class="mt-2 space-y-2 text-sm">
                <li><a class="hover:underline" href="{{ route('products.index') }}">Katalog Produk</a></li>
                <li><a class="hover:underline" href="{{ route('portfolio.index') }}">Portfolio Proyek</a></li>
                <li><a class="hover:underline" href="{{ route('contact.index') }}">Kontak & Lokasi</a></li>
            </ul>
        </div>

        <div>
            <div class="font-semibold">Kontak</div>
            <div class="mt-2 text-sm text-slate-600 space-y-2">
                <div>
                    WhatsApp:
                    <a class="underline" href="https://wa.me/{{ config('site.whatsapp_number') }}" target="_blank" rel="noopener">
                        {{ config('site.whatsapp_number') }}
                    </a>
                </div>

                {{-- Alamat: (isi sendiri) --}}
                {{-- Jam operasional: (isi sendiri) --}}
                {{-- Google Maps embed/link: (isi sendiri) --}}
            </div>
        </div>
    </x-container>

    <div class="px-4 py-4 text-center text-xs text-slate-500">
        © {{ date('Y') }} {{ config('site.site_name', 'Toko Kayu Mas Aji') }}. All rights reserved.
    </div>
</footer>