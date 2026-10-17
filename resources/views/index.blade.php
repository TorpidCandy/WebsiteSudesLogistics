@extends('layouts.app')

@section('title', 'Sudes Logistics | Trang chủ')

@section('content')
    <main>

        {{-- HERO BANNER --}}
        <section class="hero-section" aria-label="Giới thiệu Sudes Logistics">
            <div class="swiper hero-swiper" data-hero-slider>
                <div class="swiper-wrapper">
                    <article class="swiper-slide hero-slide" data-hero-slide>
                        <img
                            src="{{ asset('images/hero-slide-logistics-01.png') }}"
                            alt=""
                            aria-hidden="true"
                            fetchpriority="high"
                        >

                        <div class="hero-inner">
                            <div class="hero-overlay" aria-hidden="true"></div>
                            <div class="hero-content">
                                <h1>Giải Pháp Logistic Toàn Diện</h1>
                                <p class="hero-description">
                                    Chúng tôi cung cấp giải pháp chuỗi cung ứng tối ưu,
                                    hỗ trợ hàng nghìn doanh nghiệp Việt Nam xuất nhập khẩu
                                    hiệu quả. Nâng cao vận hành, mở rộng thị trường.
                                </p>
                                <div class="hero-actions">
                                    <a class="button hero-cta" href="#contact">BÁO GIÁ NGAY</a>
                                    <a class="button hero-cta hero-cta-outline" href="#about">Tìm hiểu thêm</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="swiper-slide hero-slide" data-hero-slide>
                        <img
                            src="{{ asset('images/hero-slide-port-02.png') }}"
                            alt=""
                            aria-hidden="true"
                            loading="lazy"
                        >

                        <div class="hero-inner">
                            <div class="hero-overlay" aria-hidden="true"></div>
                            <div class="hero-content">
                                <h2>Vững Bước Vươn Ra Thế Giới</h2>
                                <p class="hero-description">
                                    Là chuyên gia logistics hàng đầu, chúng tôi mang đến
                                    dịch vụ chuyên nghiệp và giải pháp đột phá cho xuất
                                    nhập khẩu. Giúp hàng nghìn doanh nghiệp vững vàng
                                    phát triển toàn cầu.
                                </p>
                                <div class="hero-actions">
                                    <a class="hero-cta" href="#contact">BÁO GIÁ NGAY</a>
                                    <a class="hero-cta hero-cta-outline" href="#services">Dịch vụ của chúng tôi</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

            </div>
        </section>

        {{-- ABOUT --}}
        <section class="section section-about" id="about" aria-labelledby="about-title">
            <div class="container">
                <div class="row align-items-center g-4 g-xl-5">
                    <div class="col-12 col-lg-6" data-aos="fade-right">
                        <div class="about-image-wrap">
                            <img
                                class="about-image"
                                src="{{ asset('images/company-logistics-collage.png') }}"
                                alt="Hoạt động logistics và chuỗi cung ứng của Sudes"
                                loading="lazy"
                            >
                        </div>
                    </div>
                    <div class="col-12 col-lg-6" data-aos="fade-left" data-aos-delay="100">
                        <p class="section-kicker">SUDES LOGISTICS</p>
                        <h2 class="section-title" id="about-title">SUDES LOGISTICS CO., LTD</h2>
                        <p class="section-intro">
                            Được thành lập bởi những nhà lãnh đạo mang trong mình tâm huyết
                            mạnh mẽ đối với lĩnh vực Logistics. SUDES LOGISTICS có nhiều năm
                            kinh nghiệm cung cấp các dịch vụ hậu cần, các giải pháp tối ưu
                            trong hoạt động Xuất - Nhập khẩu cho hàng nghìn doanh nghiệp tại Việt Nam.
                        </p>
                        <div class="about-feature-list">
                            <div class="about-feature-item">
                                <svg class="about-feature-icon" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M1 3h15v13H1zM16 8l5 5H16z" />
                                    <circle cx="5.5" cy="18.5" r="2.5" />
                                    <circle cx="18.5" cy="18.5" r="2.5" />
                                </svg>
                                <span>Vận chuyển hàng hóa đường bộ</span>
                            </div>
                            <div class="about-feature-item">
                                <svg class="about-feature-icon" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M17.8 19.2 16 11l3.5-3.5C21 6 21 4 19 4c-1 0-1.5.5-3.5 2.5L7 7 1 8.5l.5 1.5 6-1L11 13l-2 2 2 1 1 2 2-2 1-2 3.8 6.2c.5.5 1.5.5 2-.2l.2-.3c.5-.8.4-1.5-.2-1.5z" />
                                </svg>
                                <span>Vận chuyển hàng hóa đường hàng không</span>
                            </div>
                            <div class="about-feature-item">
                                <svg class="about-feature-icon" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M2 20h20M3 20V8l9-5 9 5v12M9 20v-5h6v5" />
                                    <path d="M12 3v4M3 8h18" />
                                </svg>
                                <span>Vận chuyển hàng hóa đường biển</span>
                            </div>
                        </div>
                        <div class="about-order-count">
                            <strong>1500+</strong>
                            <span>Đơn hàng vận chuyển thành công</span>
                        </div>
                        <a class="button" href="#contact">BÁO GIÁ NGAY</a>
                    </div>
                </div>
            </div>
        </section>

        {{-- PROCESS --}}
        <section class="section section-process" id="process" aria-labelledby="process-title">
            <div class="container">
                <div class="section-heading section-heading-centered" data-aos="fade-up">
                    <p class="section-kicker">QUY TRÌNH RÕ RÀNG</p>
                    <h2 class="section-title" id="process-title">QUY TRÌNH LÀM VIỆC</h2>
                    <p class="section-intro">Mỗi đơn hàng được xử lý theo quy trình bài bản, minh bạch và có trách nhiệm.</p>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <div class="col" data-aos="fade-up" data-aos-delay="0">
                        <article class="process-card">
                            <div class="process-icon-wrap">
                                <span class="process-number">01</span>
                                <svg class="process-icon" viewBox="0 0 48 48" aria-hidden="true">
                                    <rect x="6" y="8" width="36" height="32" rx="3" />
                                    <path d="M16 20h16M16 28h10" />
                                    <circle cx="34" cy="36" r="7" fill="white" />
                                    <path d="M31 36l2 2 4-4" stroke-width="2" />
                                </svg>
                            </div>
                            <h3>Yêu cầu báo giá</h3>
                            <p>Khách hàng gửi yêu cầu báo giá dịch vụ theo nhu cầu. Chúng tôi nhanh chóng phản hồi với chi phí tối ưu và giải pháp phù hợp nhất cho từng lô hàng.</p>
                        </article>
                    </div>
                    <div class="col" data-aos="fade-up" data-aos-delay="100">
                        <article class="process-card">
                            <div class="process-icon-wrap">
                                <span class="process-number">02</span>
                                <svg class="process-icon" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M8 24l10 10L40 14" />
                                    <circle cx="24" cy="24" r="18" />
                                </svg>
                            </div>
                            <h3>Tiếp nhận đơn hàng</h3>
                            <p>Sau khi thống nhất báo giá, chúng tôi tiếp nhận thông tin đơn hàng, xác nhận chi tiết và bắt đầu tiến hành các thủ tục xử lý một cách chính xác và nhanh chóng.</p>
                        </article>
                    </div>
                    <div class="col" data-aos="fade-up" data-aos-delay="200">
                        <article class="process-card">
                            <div class="process-icon-wrap">
                                <span class="process-number">03</span>
                                <svg class="process-icon" viewBox="0 0 48 48" aria-hidden="true">
                                    <rect x="4" y="16" width="40" height="26" rx="2" />
                                    <path d="M4 26h40M14 26v16M34 26v16" />
                                    <path d="M16 6h16v10H16z" />
                                </svg>
                            </div>
                            <h3>Đặt Kho bãi và lưu trữ</h3>
                            <p>Hàng hóa được sắp xếp vào kho bãi phù hợp, đảm bảo điều kiện bảo quản an toàn, kiểm soát số lượng, tình trạng và hỗ trợ truy xuất dễ dàng khi cần.</p>
                        </article>
                    </div>
                    <div class="col" data-aos="fade-up" data-aos-delay="300">
                        <article class="process-card">
                            <div class="process-icon-wrap">
                                <span class="process-number">04</span>
                                <svg class="process-icon" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M4 30h28V16H4zM32 22h8l4 6v8h-12z" />
                                    <circle cx="12" cy="36" r="4" />
                                    <circle cx="36" cy="36" r="4" />
                                </svg>
                            </div>
                            <h3>Vận chuyển sản phẩm</h3>
                            <p>Chúng tôi tiến hành vận chuyển hàng hóa đến đúng địa điểm, đúng thời gian với các phương tiện chuyên dụng, đảm bảo an toàn và tối ưu hóa chi phí.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        {{-- SERVICES --}}
        @php
            $services = [
                [
                    'id'    => 'service-customs-clearance',
                    'title' => 'Đại lý Hải quan',
                    'image' => 'images/service-customs-clearance.jpg',
                ],
                [
                    'id'    => 'service-cargo-insurance',
                    'title' => 'Bảo hiểm Hàng hóa',
                    'image' => 'images/service-cargo-insurance.jpg',
                ],
                [
                    'id'    => 'service-air-freight',
                    'title' => 'Vận chuyển hàng không quốc tế',
                    'image' => 'images/service-air-freight.jpg',
                ],
                [
                    'id'    => 'service-sea-freight',
                    'title' => 'Vận chuyển đường biển quốc tế',
                    'image' => 'images/service-sea-freight.jpg',
                ],
                [
                    'id'    => 'service-domestic-transport',
                    'title' => 'Vận chuyển nội bộ',
                    'image' => 'images/service-domestic-transport.jpg',
                ],
                [
                    'id'    => 'service-heavy-lift',
                    'title' => 'Nâng hạ - cẩu - lắp đặt hàng siêu trường, siêu trọng',
                    'image' => 'images/service-heavy-lift.jpg',
                ],
                [
                    'id'    => 'service-warehouse-distribution',
                    'title' => 'Dịch vụ cho thuê kho bãi, phân phối hàng hóa',
                    'image' => 'images/service-warehouse-distribution.jpg',
                ],
                [
                    'id'    => 'service-import-export-documents',
                    'title' => 'Dịch vụ chứng từ & Tư vấn xuất nhập khẩu',
                    'image' => 'images/service-import-export-documents.jpg',
                ],
            ];
        @endphp

        <section class="section section-services" id="services" aria-labelledby="services-title">
            <div class="container">
                <div class="section-heading" data-aos="fade-up">
                    <p class="section-kicker">GIẢI PHÁP CHUỖI CUNG ỨNG</p>
                    <h2 class="section-title" id="services-title">DỊCH VỤ CỦA SUDES LOGISTICS</h2>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 g-3">
                    @foreach ($services as $index => $service)
                        <div class="col" data-aos="fade-up" data-aos-delay="{{ ($index % 4) * 80 }}">
                            <article class="service-card" id="{{ $service['id'] }}">
                                <div class="service-image">
                                    <img
                                        src="{{ asset($service['image']) }}"
                                        alt=""
                                        loading="lazy"
                                    >
                                </div>
                                <div class="service-card-content">
                                    <span class="service-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                    <h3>{{ $service['title'] }}</h3>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- WHY US / STATISTICS --}}
        <section class="section section-why" id="why-us" aria-labelledby="why-title">
            <div class="container">
                <div class="section-heading section-heading-centered" data-aos="fade-up">
                    <p class="section-kicker">TẠI SAO CHỌN CHÚNG TÔI?</p>
                    <h2 class="section-title" id="why-title">VỚI 10 NĂM KINH NGHIỆM</h2>
                    <p class="section-intro">
                        Trở thành công ty hậu cần chuỗi cung ứng được ưa thích nhất trên thế giới
                        vì hiểu biết sâu sắc, chất lượng dịch vụ tốt nhất, đổi mới và tăng trưởng
                        không ngừng cho doanh nghiệp và xã hội.
                    </p>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-5 g-3 stats-grid">
                    <div class="col" data-aos="fade-up" data-aos-delay="0">
                        <div class="stat-card">
                            <strong>30 CỤM KHO</strong>
                            <span>Trên toàn quốc</span>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up" data-aos-delay="80">
                        <div class="stat-card">
                            <strong>300000 M3</strong>
                            <span>Tổng sức chứa</span>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up" data-aos-delay="160">
                        <div class="stat-card">
                            <strong>250</strong>
                            <span>Cán bộ nhân viên</span>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up" data-aos-delay="240">
                        <div class="stat-card">
                            <strong>100 XE TẢI</strong>
                            <span>Chuyên dụng</span>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up" data-aos-delay="320">
                        <div class="stat-card">
                            <strong>+5000</strong>
                            <span>Khách hàng tin tưởng &amp; sử dụng dịch vụ</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- NEWS --}}
        @php
            $newsItems = [
                [
                    'title'       => 'Xu Hướng Nổi Bật Trong Logistics Toàn Cầu: Định Hình Tương Lai Chuỗi Cung Ứng',
                    'description' => 'Ngành logistics toàn cầu đang chứng kiến những thay đổi sâu rộng, được thúc đẩy bởi tiến bộ công nghệ, sự thay đổi trong kỳ vọng và nhận thức về môi trường. Để duy trì tính cạnh tranh...',
                    'date'        => '2025-06-02',
                    'date_label'  => '02/06/2025',
                    'image'       => 'images/logistics-network-aerial.png',
                ],
                [
                    'title'       => 'Tối Ưu Hóa Hiệu Quả Vận Tải Trong Logistics: Chìa Khóa Tăng Trưởng Bền Vững',
                    'description' => 'Trong bối cảnh kinh doanh cạnh tranh ngày nay, hiệu quả vận tải là một trong những yếu tố then chốt quyết định sự thành công của chuỗi cung ứng. Việc tối ưu hóa hoạt động vận tải...',
                    'date'        => '2025-06-02',
                    'date_label'  => '02/06/2025',
                    'image'       => 'images/logistics-transport-background.png',
                ],
                [
                    'title'       => 'Logistics Ngược: Xu Hướng Quan Trọng Trong Chuỗi Cung Ứng Hiện Đại',
                    'description' => 'Trong ngành logistics, khi nhắc đến chuỗi cung ứng, người ta thường hình dung về dòng chảy hàng hóa từ nhà sản xuất đến tay người tiêu dùng. Tuy nhiên, một khía cạnh ngày càng quan trọng...',
                    'date'        => '2025-06-02',
                    'date_label'  => '02/06/2025',
                    'image'       => 'images/warehouse-sorting-operations.png',
                ],
                [
                    'title'       => 'Ngành Logistics: Động Lực Tăng Trưởng Và Những Thách Thức Mới',
                    'description' => 'Ngành logistics toàn cầu đang trải qua giai đoạn chuyển mình mạnh mẽ, vừa là động lực chính cho sự phát triển kinh tế, vừa đối mặt với hàng loạt thách thức và cơ hội mới...',
                    'date'        => '2025-06-02',
                    'date_label'  => '02/06/2025',
                    'image'       => 'images/multimodal-logistics-collage.png',
                ],
            ];
        @endphp

        <section class="section section-news" id="news" aria-labelledby="news-title">
            <div class="container">
                <div class="section-heading" data-aos="fade-up">
                    <p class="section-kicker">CẬP NHẬT KIẾN THỨC NGÀNH</p>
                    <h2 class="section-title" id="news-title">TIN TỨC MỚI NHẤT</h2>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4">
                    @foreach ($newsItems as $index => $news)
                        <div class="col" data-aos="fade-up" data-aos-delay="{{ ($index % 4) * 80 }}">
                            <article class="news-card">
                                <div class="news-image">
                                    <img
                                        src="{{ asset($news['image']) }}"
                                        alt="{{ $news['title'] }}"
                                        loading="lazy"
                                    >
                                </div>
                                <div class="news-content">
                                    <time datetime="{{ $news['date'] }}">{{ $news['date_label'] }}</time>
                                    <h3>{{ $news['title'] }}</h3>
                                    <p class="news-description">{{ $news['description'] }}</p>
                                    <a class="news-more" href="#">
                                        Đọc thêm
                                        <svg viewBox="0 0 20 20" aria-hidden="true" width="16" height="16">
                                            <path d="M4 10h12M10 4l6 6-6 6" />
                                        </svg>
                                    </a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- FAQ --}}
        <section class="section section-faq" id="faq" aria-labelledby="faq-title">
            <div class="container">
                <div class="row align-items-start g-4 g-xl-5">
                    <div class="col-12 col-lg-5" data-aos="fade-right">
                        <p class="section-kicker">FAQ?</p>
                        <h2 class="section-title" id="faq-title">Câu hỏi thường gặp</h2>
                        <p class="section-intro">
                            Thông tin giải đáp một số câu hỏi thường gặp về dịch vụ logistics.
                        </p>
                    </div>
                    <div class="col-12 col-lg-7" data-aos="fade-left" data-aos-delay="100">
                        <div class="accordion faq-accordion" id="sudesFaqAccordion">
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button" type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#faqAnswerOne"
                                        aria-expanded="true"
                                        aria-controls="faqAnswerOne">
                                        01. Tôi cần chuẩn bị gì để gửi hàng?
                                    </button>
                                </h3>
                                <div id="faqAnswerOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#sudesFaqAccordion">
                                    <div class="accordion-body">
                                        Bạn chỉ cần cung cấp thông tin chi tiết về loại hàng hóa,
                                        số lượng, kích thước, địa chỉ nhận và giao hàng. Nếu có
                                        yêu cầu đặc biệt như bảo quản lạnh, đóng gói riêng hay
                                        thời gian giao nhận cụ thể, hãy thông báo trước để chúng
                                        tôi chuẩn bị dịch vụ phù hợp nhất.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#faqAnswerTwo"
                                        aria-expanded="false"
                                        aria-controls="faqAnswerTwo">
                                        02. Thời gian vận chuyển mất bao lâu?
                                    </button>
                                </h3>
                                <div id="faqAnswerTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#sudesFaqAccordion">
                                    <div class="accordion-body">
                                        Thời gian vận chuyển phụ thuộc vào khoảng cách, loại dịch
                                        vụ (tiêu chuẩn, nhanh, tiết kiệm), và điều kiện giao thông.
                                        Trong nước thường mất từ 1–3 ngày, quốc tế có thể kéo dài
                                        5–10 ngày. Với hàng gấp, chúng tôi có các giải pháp vận
                                        chuyển ưu tiên nhanh chóng và đúng hẹn.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#faqAnswerThree"
                                        aria-expanded="false"
                                        aria-controls="faqAnswerThree">
                                        03. Làm thế nào để biết tình trạng đơn hàng?
                                    </button>
                                </h3>
                                <div id="faqAnswerThree" class="accordion-collapse collapse"
                                    data-bs-parent="#sudesFaqAccordion">
                                    <div class="accordion-body">
                                        Chúng tôi sẽ thông báo cho bạn về tình trạng đơn hàng qua
                                        email hoặc điện thoại khi có bất kỳ cập nhật quan trọng
                                        nào. Bạn có thể liên hệ trực tiếp với chúng tôi để yêu
                                        cầu thông tin chi tiết về tiến độ giao hàng.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#faqAnswerFour"
                                        aria-expanded="false"
                                        aria-controls="faqAnswerFour">
                                        04. Phí vận chuyển được tính như thế nào?
                                    </button>
                                </h3>
                                <div id="faqAnswerFour" class="accordion-collapse collapse"
                                    data-bs-parent="#sudesFaqAccordion">
                                    <div class="accordion-body">
                                        Chi phí vận chuyển dựa trên nhiều yếu tố như trọng lượng,
                                        kích thước hàng, loại hàng (thông thường hay đặc biệt),
                                        quãng đường di chuyển và hình thức vận chuyển (bộ, thủy,
                                        hàng không). Chúng tôi luôn cung cấp bảng giá rõ ràng,
                                        minh bạch và hỗ trợ báo giá nhanh theo yêu cầu.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- TESTIMONIALS --}}
        <section class="section section-testimonials" id="testimonials" aria-labelledby="testimonials-title">
            <div class="container">
                <div class="section-heading section-heading-centered" data-aos="fade-up">
                    <p class="section-kicker">FEEDBACK</p>
                    <h2 class="section-title" id="testimonials-title">ĐÁNH GIÁ KHÁCH HÀNG</h2>
                </div>
                <div class="swiper testimonial-swiper" data-testimonials-slider>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <article class="testimonial-card">
                                <div class="testimonial-rating" aria-label="4 sao trên 5">
                                    <span class="testimonial-stars" aria-hidden="true">★★★★<span>★</span></span>
                                </div>
                                <blockquote class="testimonial-quote">
                                    <p>Sudes Logistic là đối tác không thể thiếu trong chuỗi cung ứng của chúng tôi. Dịch vụ nhanh, chuyên nghiệp và luôn đúng cam kết.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <img
                                        src="{{ asset('images/customer-portrait-01.png') }}"
                                        alt=""
                                        loading="lazy"
                                        aria-hidden="true"
                                    >
                                    <div class="testimonial-info">
                                        <h3>Nguyễn Trung Anh</h3>
                                        <p>Giám đốc Logistics – Công ty cổ phần May mặc K&amp;K</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="testimonial-card">
                                <div class="testimonial-rating" aria-label="5 sao trên 5">
                                    <span class="testimonial-stars" aria-hidden="true">★★★★★</span>
                                </div>
                                <blockquote class="testimonial-quote">
                                    <p>Tôi ấn tượng với cách Sudes xử lý linh hoạt và kịp thời trong các tình huống khẩn. Đội ngũ hỗ trợ rất nhiệt tình và bài bản.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <img
                                        src="{{ asset('images/customer-portrait-02.png') }}"
                                        alt=""
                                        loading="lazy"
                                        aria-hidden="true"
                                    >
                                    <div class="testimonial-info">
                                        <h3>Nguyễn Ngọc Sơn</h3>
                                        <p>Quản lý Vận hành – Công ty CP Thực phẩm Đông Nam</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="testimonial-card">
                                <div class="testimonial-rating" aria-label="5 sao trên 5">
                                    <span class="testimonial-stars" aria-hidden="true">★★★★★</span>
                                </div>
                                <blockquote class="testimonial-quote">
                                    <p>Chúng tôi đã làm việc với nhiều đơn vị logistics, nhưng Sudes là cái tên tạo được sự tin tưởng lâu dài nhờ phong cách làm việc rõ ràng và hiệu quả.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <img
                                        src="{{ asset('images/customer-portrait-03.png') }}"
                                        alt=""
                                        loading="lazy"
                                        aria-hidden="true"
                                    >
                                    <div class="testimonial-info">
                                        <h3>Lê Quang Hải</h3>
                                        <p>Trưởng phòng Mua hàng – Công ty TNHH Thiết bị Công nghiệp HT</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="testimonial-pagination swiper-pagination" data-testimonials-pagination aria-label="Chọn đánh giá"></div>
                </div>
            </div>
        </section>

        {{-- PARTNERS AND LOGISTICS NETWORK --}}
        <section class="section section-partners" id="partners" aria-labelledby="partners-title">
            <div class="container">
                <div class="row align-items-center g-4 g-xl-5">
                    <div class="col-12 col-xl-7" data-aos="fade-right">
                        <h2 class="section-title" id="partners-title">Cùng Sudes Logistic tạo nên giá trị bền vững!</h2>
                        <p class="partners-description">
                            Tại Sudes Logistic, chúng tôi luôn đề cao tinh thần hợp tác cùng phát triển.
                            Với mỗi đối tác, chúng tôi cam kết minh bạch, đồng hành dài hạn và cùng xây
                            dựng giải pháp logistics hiệu quả, linh hoạt theo từng nhu cầu cụ thể. Bằng
                            kinh nghiệm vận hành và mạng lưới kết nối rộng khắp, Sudes Logistic không
                            chỉ hỗ trợ tối ưu chi phí mà còn góp phần nâng cao năng lực cạnh tranh và
                            phát triển bền vững cho cả hai bên.
                        </p>
                        <div class="partner-logo-grid" aria-label="Đối tác logistics">
                            @for ($i = 1; $i <= 20; $i++)
                                <div class="partner-logo-item">
                                    <img
                                        src="{{ asset('images/brand-logo-' . str_pad($i, 2, '0', STR_PAD_LEFT) . '.png') }}"
                                        alt="Logo đối tác {{ $i }}"
                                        loading="lazy"
                                    >
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="col-12 col-xl-5" data-aos="fade-left" data-aos-delay="100">
                        <img
                            class="partners-map"
                            src="{{ asset('images/vietnam-logistics-network-map.png') }}"
                            alt="Bản đồ mạng lưới logistics tại Việt Nam"
                            loading="lazy"
                        >
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection