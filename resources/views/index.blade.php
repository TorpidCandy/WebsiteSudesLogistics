@extends('layouts.app')

@section('title', 'Sudes Logistics | Trang chủ')

@section('content')
    <main>
        <section class="hero-section" aria-label="Giới thiệu Sudes Logistics">
            <div class="swiper hero-swiper" data-hero-slider>
                <div class="swiper-wrapper">
                    <article class="swiper-slide hero-slide" data-hero-slide>
                        <img
                            src="{{ asset('images/hero/hero-slide-logistics-01.png') }}"
                            alt=""
                            aria-hidden="true"
                            fetchpriority="high"
                        >

                        <div class="hero-inner">
                            <div class="hero-content">
                                <h1>Giải Pháp Logistic Toàn <br>Diện</h1>
                                <p class="hero-description">
                                    Chúng tôi cung cấp giải pháp chuỗi cung ứng tối ưu,
                                    hỗ trợ hàng nghìn doanh nghiệp Việt Nam xuất nhập khẩu
                                    hiệu quả. Nâng cao vận hành, mở rộng thị trường.
                                </p>
                            </div>
                        </div>
                    </article>

                    <article class="swiper-slide hero-slide" data-hero-slide>
                        <img
                            src="{{ asset('images/hero/hero-slide-port-02.png') }}"
                            alt=""
                            aria-hidden="true"
                            loading="lazy"
                        >

                        <div class="hero-inner">
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
            </div>
        </section>
    </main>
@endsection