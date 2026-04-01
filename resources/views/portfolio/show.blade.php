@extends('layouts.public')

@section('title', $portfolio->title.' | Portfolio | Toko Kayu Mas Aji')
@section('meta_description', 'Detail portfolio: '.$portfolio->title)

@section('content')
    <section class="border-b bg-slate-50">
        <x-container class="py-8">
            <div class="text-xs text-slate-500">
                <a class="hover:underline" href="{{ route('portfolio.index') }}">Portfolio</a>
                <span class="mx-2">/</span>
                <span class="text-slate-700">{{ $portfolio->title }}</span>
            </div>
            <h1 class="mt-2 text-3xl font-extrabold tracking-tight">{{ $portfolio->title }}</h1>
        </x-container>
    </section>

    <x-container class="py-10">
        <div class="grid gap-8 lg:grid-cols-2 lg:items-start">
            <div class="rounded-2xl border bg-white overflow-hidden">
                <div class="aspect-[4/3] bg-slate-100">
                    @if(!empty($portfolio->image))
                        <img src="{{ asset('storage/'.$portfolio->image) }}"
                             alt="{{ $portfolio->title }}"
                             class="h-full w-full object-cover" />
                    @endif
                </div>
            </div>

            <div class="space-y-6">
                <div class="rounded-2xl border bg-white p-6">
                    <div class="text-sm font-semibold text-slate-900">Deskripsi Proyek</div>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        {{ $portfolio->description }}
                    </p>
                </div>

                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('portfolio.index') }}"
                       class="inline-flex items-center justify-center rounded-lg border px-4 py-2 text-sm font-semibold hover:bg-slate-50">
                        Kembali ke Portfolio
                    </a>

                    <x-button-wa
                        label="Tanya Proyek Serupa"
                        :message="'Halo Admin Toko Kayu Mas Aji, saya melihat portfolio: '.$portfolio->title.'. Saya ingin tanya apakah bisa dibuat proyek serupa dan mohon estimasi.'"
                    />
                </div>
            </div>
        </div>
    </x-container>
@endsection