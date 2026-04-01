@extends('layouts.public')

@section('title', 'Portfolio Proyek | Toko Kayu Mas Aji')
@section('meta_description', 'Dokumentasi proyek yang pernah dikerjakan oleh Toko Kayu Mas Aji.')

@section('content')
    <section class="border-b bg-slate-50">
        <x-container class="py-10">
            <div class="max-w-3xl">
                <div class="text-xs uppercase tracking-widest text-slate-500">Dokumentasi</div>
                <h1 class="mt-2 text-3xl font-extrabold tracking-tight">Portfolio Proyek</h1>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                    Dokumentasi beberapa proyek yang pernah kami kerjakan.
                </p>
            </div>
        </x-container>
    </section>

    <x-container class="py-10">
        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            @forelse($portfolios as $portfolio)
                <x-portfolio-card :portfolio="$portfolio" />
            @empty
                <div class="rounded-2xl border bg-white p-6 text-sm text-slate-600">
                    Portfolio belum tersedia.
                </div>
            @endforelse
        </div>

        <div class="mt-8">
            {{ $portfolios->links() }}
        </div>

        <div class="mt-10 rounded-2xl border bg-slate-50 p-6 sm:p-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <div class="text-lg font-extrabold tracking-tight">Ingin proyek serupa?</div>
                <div class="mt-1 text-sm text-slate-600">Konsultasikan kebutuhan Anda via WhatsApp.</div>
            </div>
            <x-button-wa label="Konsultasi Proyek" :message="'Halo Admin Toko Kayu Mas Aji, saya ingin konsultasi kebutuhan proyek kayu. Mohon arahan dan informasi yang diperlukan.'" />
        </div>
    </x-container>
@endsection