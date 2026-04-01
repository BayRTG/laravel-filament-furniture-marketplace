@props([
    'message' => null,
    'label' => 'WhatsApp',
])

@php
    $number = config('site.whatsapp_number');
    $text = $message ?? config('site.whatsapp_default_message');
    $url = 'https://wa.me/' . $number . '?text=' . urlencode($text);
@endphp

<a href="{{ $url }}"
   target="_blank" rel="noopener"
   class="inline-flex items-center justify-center rounded-lg bg-green-600 px-4 py-2 text-sm font-semibold text-white hover:bg-green-700">
    {{ $label }}
</a>