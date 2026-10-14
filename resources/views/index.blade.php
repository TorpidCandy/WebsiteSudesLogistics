@extends('layouts.app')

@section('title', 'Sudes Logistics | Trang chủ')

@section('content')
    <main>
        <section
            class="hero-section"
            data-hero-slider
            aria-label="Giới thiệu Sudes Logistics"
        >
            <div class="hero-slides">
                <article class="hero-slide is-active" data-hero-slide aria-hidden="false">
                    <img
                        src="{{ asset('images/hero/hero-slide-logistics-01.png') }}"
                        alt=""
                        aria-hidden="true"
                        fetchpriority="high"
                    >

                    <div class="container-xl hero-inner">
                        <div class="hero-content">
                            <h1>Giải Pháp Logistic Toàn Diện</h1>
                            <p class="hero-description">
                                Chúng tôi cung cấp giải pháp chuỗi cung ứng tối ưu,
                                hỗ trợ hàng nghìn doanh nghiệp Việt Nam xuất nhập khẩu
                                hiệu quả. Nâng cao vận hành, mở rộng thị trường.
                            </p>
                        </div>
                    </div>
                </article>

                <article class="hero-slide" data-hero-slide aria-hidden="true">
                    <img
                        src="{{ asset('images/hero/hero-slide-port-02.png') }}"
                        alt=""
                        aria-hidden="true"
                        loading="lazy"
                    >

                    <div class="container-xl hero-inner">
                        <div class="hero-content">
                            <h2>Vững Bước Vươn Ra Thế Giới</h2>
                            <p class="hero-description">
                                Là chuyên gia logistics hàng đầu, chúng tôi mang đến
                                dịch vụ chuyên nghiệp và giải pháp đột phá cho xuất
                                nhập khẩu. Giúp hàng nghìn doanh nghiệp vững vàng
                                phát triển toàn cầu.
                            </p>
                        </div>
                    </div>
                </article>
            </div>

            <button
                class="hero-control hero-control-prev"
                type="button"
                data-hero-prev
                aria-label="Slide trước"
                disabled
            >
                <span aria-hidden="true">‹</span>
            </button>

            <button
                class="hero-control hero-control-next"
                type="button"
                data-hero-next
                aria-label="Slide tiếp theo"
            >
                <span aria-hidden="true">›</span>
            </button>

            <div class="hero-indicators" aria-label="Chọn slide">
                <button
                    class="hero-indicator is-active"
                    type="button"
                    data-hero-indicator="0"
                    aria-label="Hiển thị slide 1"
                    aria-pressed="true"
                ></button>
                <button
                    class="hero-indicator"
                    type="button"
                    data-hero-indicator="1"
                    aria-label="Hiển thị slide 2"
                    aria-pressed="false"
                ></button>
            </div>
        </section>
    </main>
@endsection