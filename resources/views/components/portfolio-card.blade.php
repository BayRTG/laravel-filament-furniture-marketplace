@props(['portfolio'])

<a href="{{ route('portfolio.show', $portfolio->slug) }}"
   class="group block overflow-hidden rounded-xl border bg-white hover:shadow-sm transition">
    <div class="aspect-[4/3] bg-slate-100 overflow-hidden">
        @if(!empty($portfolio->image))
            <img src="{{ asset('storage/'.$portfolio->image) }}"
                 alt="{{ $portfolio->title }}"
                 class="h-full w-full object-cover group-hover:scale-105 transition" />
        @endif
    </div>

    <div class="p-4">
        <div class="font-semibold">{{ $portfolio->title }}</div>
        <div class="mt-1 text-sm text-slate-600 line-clamp-2">
            {{ $portfolio->description }}
        </div>
    </div>
</a>