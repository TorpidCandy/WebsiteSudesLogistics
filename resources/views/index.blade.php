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
                                    <a class="hero-cta" href="#contact">BÁO GIÁ NGAY</a>
                                    <a class="hero-cta hero-cta-outline" href="#about">Tìm hiểu thêm</a>
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

                <div class="hero-pagination swiper-pagination" aria-label="Chọn slide"></div>
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
                            <p>Tiếp nhận thông tin hàng hóa và nhu cầu vận chuyển. Cung cấp báo giá nhanh chóng, minh bạch.</p>
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
                            <p>Xác nhận yêu cầu và ký kết phương án thực hiện. Phân công nhân sự và lập kế hoạch vận hành.</p>
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
                            <h3>Đặt kho bãi &amp; lưu trữ</h3>
                            <p>Phối hợp xử lý và lưu trữ hàng hóa theo kế hoạch. Đảm bảo điều kiện bảo quản phù hợp.</p>
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
                            <h3>Vận chuyển &amp; giao hàng</h3>
                            <p>Điều phối vận chuyển và hoàn tất giao nhận đúng hạn. Cập nhật trạng thái đơn hàng liên tục.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        {{-- SERVICES --}}
        @php
            $services = [
                [
                    'id'          => 'service-customs-clearance',
                    'title'       => 'Đại lý Hải quan',
                    'description' => 'Tư vấn và thực hiện thủ tục khai báo hải quan cho hàng xuất nhập khẩu, đảm bảo nhanh chóng và đúng quy định.',
                    'image'       => 'images/customs-clearance-team.png',
                ],
                [
                    'id'          => 'service-cargo-insurance',
                    'title'       => 'Bảo hiểm Hàng hóa',
                    'description' => 'Cung cấp giải pháp bảo hiểm toàn diện cho hàng hóa trong suốt quá trình vận chuyển, giảm thiểu rủi ro tổn thất.',
                    'image'       => 'images/cargo-handling-team.png',
                ],
                [
                    'id'          => 'service-air-freight',
                    'title'       => 'Vận chuyển Hàng không Quốc tế',
                    'description' => 'Dịch vụ vận chuyển hàng không nhanh chóng đến các cảng quốc tế lớn, phù hợp hàng có giá trị cao hoặc gấp thời gian.',
                    'image'       => 'images/multimodal-logistics-collage-thumbnail.png',
                ],
                [
                    'id'          => 'service-sea-freight',
                    'title'       => 'Vận chuyển Đường biển Quốc tế',
                    'description' => 'Vận chuyển container FCL/LCL đến các cảng trên toàn thế giới với chi phí tối ưu và lịch trình ổn định.',
                    'image'       => 'images/ocean-freight-vessel.png',
                ],
                [
                    'id'          => 'service-domestic-transport',
                    'title'       => 'Vận chuyển Nội địa',
                    'description' => 'Mạng lưới xe tải phủ rộng toàn quốc, giao hàng đúng giờ và đảm bảo chất lượng từ kho đến tay khách hàng.',
                    'image'       => 'images/logistics-network-aerial.png',
                ],
                [
                    'id'          => 'service-heavy-lift',
                    'title'       => 'Nâng hạ, cẩu và lắp đặt hàng siêu trường, siêu trọng',
                    'description' => 'Giải pháp vận chuyển và lắp đặt chuyên biệt cho thiết bị công nghiệp, máy móc siêu trường siêu trọng.',
                    'image'       => 'images/smart-logistics-network.png',
                ],
                [
                    'id'          => 'service-warehouse-distribution',
                    'title'       => 'Cho thuê Kho bãi và Phân phối hàng hóa',
                    'description' => 'Hệ thống kho hiện đại, đạt chuẩn, tích hợp dịch vụ phân phối và quản lý hàng tồn kho hiệu quả.',
                    'image'       => 'images/warehouse-sorting-facility.png',
                ],
                [
                    'id'          => 'service-import-export-documents',
                    'title'       => 'Chứng từ và Tư vấn Xuất Nhập khẩu',
                    'description' => 'Hỗ trợ chuẩn bị chứng từ xuất nhập khẩu, tư vấn quy trình, thuế quan và các yêu cầu pháp lý liên quan.',
                    'image'       => 'images/multimodal-logistics-collage.png',
                ],
            ];
        @endphp

        <section class="section section-services" id="services" aria-labelledby="services-title">
            <div class="container">
                <div class="section-heading" data-aos="fade-up">
                    <p class="section-kicker">GIẢI PHÁP CHUỖI CUNG ỨNG</p>
                    <h2 class="section-title" id="services-title">DỊCH VỤ CỦA SUDES LOGISTICS</h2>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 g-4">
                    @foreach ($services as $index => $service)
                        <div class="col" data-aos="fade-up" data-aos-delay="{{ ($index % 4) * 80 }}">
                            <article class="service-card" id="{{ $service['id'] }}">
                                <a class="service-image" href="#contact">
                                    <img
                                        src="{{ asset($service['image']) }}"
                                        alt="{{ $service['title'] }}"
                                        loading="lazy"
                                    >
                                </a>
                                <div class="service-card-content">
                                    <h3>{{ $service['title'] }}</h3>
                                    <p class="service-description">{{ $service['description'] }}</p>
                                    <a class="service-more" href="#contact">
                                        Tìm hiểu thêm
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

        {{-- WHY US / STATISTICS --}}
        <section class="section section-why" id="why-us" aria-labelledby="why-title">
            <div class="container">
                <div class="row align-items-center g-4 g-xl-5">
                    <div class="col-12 col-lg-5" data-aos="fade-right">
                        <p class="section-kicker">NĂNG LỰC VẬN HÀNH</p>
                        <h2 class="section-title" id="why-title">TẠI SAO CHỌN CHÚNG TÔI?</h2>
                        <h3>Với hơn 10 năm kinh nghiệm</h3>
                        <p>
                            Sudes Logistics định hướng trở thành công ty hậu cần chuỗi cung ứng
                            được tin dùng nhất, nhờ hiểu biết sâu sắc về thị trường, chất lượng
                            dịch vụ vượt trội, tinh thần đổi mới và cam kết tăng trưởng bền vững
                            cùng doanh nghiệp khách hàng.
                        </p>
                        <a class="button" href="#contact">LIÊN HỆ NGAY</a>
                    </div>
                    <div class="col-12 col-lg-7" data-aos="fade-left" data-aos-delay="100">
                        <div class="stats-grid">
                            <div class="stat-card" data-aos="fade-up" data-aos-delay="0">
                                <strong>30</strong>
                                <span>Cụm kho trên toàn quốc</span>
                            </div>
                            <div class="stat-card" data-aos="fade-up" data-aos-delay="80">
                                <strong>300.000 m³</strong>
                                <span>Tổng sức chứa</span>
                            </div>
                            <div class="stat-card" data-aos="fade-up" data-aos-delay="160">
                                <strong>250</strong>
                                <span>Cán bộ nhân viên</span>
                            </div>
                            <div class="stat-card" data-aos="fade-up" data-aos-delay="240">
                                <strong>100</strong>
                                <span>Xe tải chuyên dụng</span>
                            </div>
                            <div class="stat-card stat-card-highlight" data-aos="fade-up" data-aos-delay="320">
                                <strong>5.000+</strong>
                                <span>Khách hàng tin tưởng</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- NEWS --}}
        @php
            $newsItems = [
                [
                    'title'       => 'Xu hướng Nổi bật trong Logistics Toàn cầu: Định hình Tương lai Chuỗi Cung ứng',
                    'description' => 'Công nghệ, kỳ vọng khách hàng và yêu cầu phát triển bền vững đang thúc đẩy ngành logistics thay đổi nhanh chóng.',
                    'date'        => '2025-06-02',
                    'date_label'  => '02/06/2025',
                    'image'       => 'images/logistics-network-aerial.png',
                ],
                [
                    'title'       => 'Tối ưu hóa Hiệu quả Vận tải trong Logistics: Chìa khóa tăng trưởng bền vững',
                    'description' => 'Tối ưu hoạt động vận tải giúp tiết kiệm chi phí, nâng cao chất lượng dịch vụ và tăng sức cạnh tranh cho chuỗi cung ứng.',
                    'date'        => '2025-05-18',
                    'date_label'  => '18/05/2025',
                    'image'       => 'images/conveyor-sorting-facility.png',
                ],
                [
                    'title'       => 'Logistics ngược: Xu hướng quan trọng trong chuỗi cung ứng hiện đại',
                    'description' => 'Logistics ngược quản lý dòng hàng quay trở lại điểm xuất phát nhằm thu hồi giá trị hoặc xử lý hàng hóa.',
                    'date'        => '2025-04-24',
                    'date_label'  => '24/04/2025',
                    'image'       => 'images/warehouse-sorting-operations.png',
                ],
                [
                    'title'       => 'Ngành Logistics: Động lực tăng trưởng và những thách thức mới',
                    'description' => 'Số hóa, thương mại điện tử và biến động thị trường đang định hình những cơ hội cũng như thách thức mới của ngành.',
                    'date'        => '2025-03-10',
                    'date_label'  => '10/03/2025',
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
                                <a class="news-image" href="#">
                                    <img
                                        src="{{ asset($news['image']) }}"
                                        alt="{{ $news['title'] }}"
                                        loading="lazy"
                                    >
                                </a>
                                <div class="news-content">
                                    <time datetime="{{ $news['date'] }}">{{ $news['date_label'] }}</time>
                                    <h3>
                                        <a href="#">{{ $news['title'] }}</a>
                                    </h3>
                                    <p class="news-description">{{ $news['description'] }}</p>
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
                        <p class="section-kicker">HỖ TRỢ KHÁCH HÀNG</p>
                        <h2 class="section-title" id="faq-title">CÂU HỎI THƯỜNG GẶP</h2>
                        <img
                            class="faq-image"
                            src="{{ asset('images/company-logistics-collage.png') }}"
                            alt="Hoạt động logistics"
                            loading="lazy"
                        >
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
                                        Chuẩn bị thông tin loại hàng, số lượng, kích thước,
                                        địa chỉ nhận và giao; thông báo trước các yêu cầu
                                        đặc biệt về bảo quản hoặc thời gian giao nhận.
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
                                        Thời gian phụ thuộc vào tuyến đường, loại hình dịch vụ
                                        và điều kiện giao nhận của từng lô hàng.
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
                                        Liên hệ Sudes Logistics qua hotline hoặc email
                                        để trao đổi về tiến trình giao nhận.
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
                                        Chi phí phụ thuộc vào trọng lượng, kích thước, loại hàng,
                                        quãng đường và phương thức vận chuyển.
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
                    <p class="section-kicker">KHÁCH HÀNG NÓI GÌ</p>
                    <h2 class="section-title" id="testimonials-title">ĐÁNH GIÁ KHÁCH HÀNG</h2>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col" data-aos="fade-up" data-aos-delay="0">
                        <article class="testimonial-card">
                            <div class="testimonial-rating" aria-label="5 sao">
                                <span class="testimonial-stars" aria-hidden="true">★★★★★</span>
                            </div>
                            <blockquote class="testimonial-quote">
                                <p>Sudes Logistics đã hỗ trợ chúng tôi vận chuyển lô hàng xuất khẩu đúng deadline trong tình huống rất gấp. Đội ngũ chuyên nghiệp, phối hợp nhanh chóng và minh bạch về chi phí.</p>
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
                    <div class="col" data-aos="fade-up" data-aos-delay="100">
                        <article class="testimonial-card">
                            <div class="testimonial-rating" aria-label="5 sao">
                                <span class="testimonial-stars" aria-hidden="true">★★★★★</span>
                            </div>
                            <blockquote class="testimonial-quote">
                                <p>Dịch vụ kho bãi và phân phối của Sudes giúp chúng tôi tối ưu được chi phí lưu kho đáng kể. Hệ thống theo dõi hàng hóa rõ ràng, dễ kiểm soát tồn kho.</p>
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
                    <div class="col" data-aos="fade-up" data-aos-delay="200">
                        <article class="testimonial-card">
                            <div class="testimonial-rating" aria-label="5 sao">
                                <span class="testimonial-stars" aria-hidden="true">★★★★★</span>
                            </div>
                            <blockquote class="testimonial-quote">
                                <p>Nhờ đội ngũ hải quan chuyên nghiệp của Sudes, quy trình thông quan cho thiết bị nhập khẩu của chúng tôi diễn ra trơn tru, không bị tắc nghẽn như trước đây.</p>
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
            </div>
        </section>

        {{-- BRAND LOGOS / PARTNER --}}
        <section class="section section-brands" aria-label="Đối tác và khách hàng của Sudes Logistics">
            <div class="container">
                <div class="section-heading section-heading-centered" data-aos="fade-up">
                    <p class="section-kicker">ĐỐI TÁC TIN TƯỞNG</p>
                    <h2 class="section-title">KHÁCH HÀNG &amp; ĐỐI TÁC</h2>
                </div>
                <div class="brands-track-wrap" data-aos="fade-up" data-aos-delay="80">
                    <div class="brands-track">
                        @for ($i = 1; $i <= 20; $i++)
                            <div class="brand-logo-item">
                                <img
                                    src="{{ asset('images/brand-logo-' . str_pad($i, 2, '0', STR_PAD_LEFT) . '.png') }}"
                                    alt="Đối tác {{ $i }}"
                                    loading="lazy"
                                >
                            </div>
                        @endfor
                        {{-- Lặp lại để tạo hiệu ứng cuộn liên tục --}}
                        @for ($i = 1; $i <= 20; $i++)
                            <div class="brand-logo-item" aria-hidden="true">
                                <img
                                    src="{{ asset('images/brand-logo-' . str_pad($i, 2, '0', STR_PAD_LEFT) . '.png') }}"
                                    alt=""
                                    loading="lazy"
                                >
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection