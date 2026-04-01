@php
    $siteName = config('site.site_name', 'Toko Kayu Mas Aji');
    $title = trim($__env->yieldContent('title', $siteName));
    $description = trim($__env->yieldContent('meta_description', 'Toko kayu & kebutuhan proyek kayu. Pesan via WhatsApp atau datang ke toko.'));
    $canonical = trim($__env->yieldContent('canonical', url()->current()));
@endphp

<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<link rel="canonical" href="{{ $canonical }}">

<meta property="og:site_name" content="{{ $siteName }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ $canonical }}">