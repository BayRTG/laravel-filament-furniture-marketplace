@props(['class' => ''])

<div {{ $attributes->merge(['class' => 'mx-auto max-w-6xl px-4 '.$class]) }}>
    {{ $slot }}
</div>