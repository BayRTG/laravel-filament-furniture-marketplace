@props(['product'])

<a href="{{ route('products.show', $product->slug) }}"
   class="group block overflow-hidden rounded-xl border bg-white hover:shadow-sm transition">
    <div class="aspect-[4/3] bg-slate-100 overflow-hidden">
        @if(!empty($product->image))
            <img src="{{ asset('storage/'.$product->image) }}"
                 alt="{{ $product->name }}"
                 class="h-full w-full object-cover group-hover:scale-105 transition" />
        @endif
    </div>

    <div class="p-4">
        <div class="font-semibold">{{ $product->name }}</div>
        <div class="mt-1 text-sm text-slate-600 line-clamp-2">
            {{ $product->description }}
        </div>
    </div>
</a>