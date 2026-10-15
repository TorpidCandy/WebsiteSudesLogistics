<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta
        name="description"
        content="Sudes Logistics cung cấp giải pháp logistics, vận tải nội địa và quốc tế, khai báo hải quan, bảo hiểm hàng hóa và kho bãi cho doanh nghiệp."
    >
    <title>@yield('title', 'Sudes Logistics | Trang chủ')</title>

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@14.3.0/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    <button
        class="back-to-top"
        type="button"
        data-back-to-top
        aria-label="Về đầu trang"
        aria-hidden="true"
        tabindex="-1"
    >
        <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="m5 14 7-7 7 7M12 7v13" />
        </svg>
    </button>

    <script src="{{ asset('vendor/bootstrap/bootstrap.bundle.min.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@14.3.0/swiper-bundle.min.js" defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
</body>
</html>