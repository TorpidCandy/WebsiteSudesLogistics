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
                                <h1>Giải Pháp Logistic Toàn Diện</h1>
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

        <section class="section section-about" id="about" aria-labelledby="about-title">
            <div class="container">
                <div class="row align-items-center g-4 g-xl-5">
                    <div class="col-12 col-lg-6">
                        <img
                            class="about-image"
                            src="{{ asset('images/about/company-logistics-collage.png') }}"
                            alt="Hoạt động logistics và chuỗi cung ứng"
                            loading="lazy"
                        >
                    </div>
                    <div class="col-12 col-lg-6">
                        <p class="section-kicker">SUDES LOGISTICS</p>
                        <h2 class="section-title" id="about-title">SUDES LOGISTICS CO., LTD</h2>
                        <p class="section-intro">
                            Được thành lập bởi những nhà lãnh đạo mang trong mình tâm huyết
                            mạnh mẽ đối với lĩnh vực Logistics. SUDES LOGISTICS có nhiều năm
                            kinh nghiệm cung cấp các dịch vụ hậu cần, các giải pháp tối ưu
                            trong hoạt động Xuất - Nhập khẩu cho hàng nghìn doanh nghiệp tại Việt Nam.
                        </p>
                        <div class="about-feature-list">
                            <p>Vận chuyển hàng hóa đường bộ</p>
                            <p>Vận chuyển hàng hóa đường không</p>
                            <p>Vận chuyển hàng hóa đường biển</p>
                        </div>
                        <p class="about-order-count">
                            <strong>1500+</strong>
                            Đơn hàng vận chuyển thành công
                        </p>
                        <a class="button" href="#contact">BÁO GIÁ NGAY</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-process" id="process" aria-labelledby="process-title">
            <div class="container">
                <div class="section-heading section-heading-centered">
                    <p class="section-kicker">QUY TRÌNH RÕ RÀNG</p>
                    <h2 class="section-title" id="process-title">QUY TRÌNH LÀM VIỆC</h2>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <div class="col">
                        <article class="process-card">
                            <span class="process-number">01</span>
                            <h3>Yêu cầu báo giá</h3>
                            <p>Tiếp nhận thông tin hàng hóa và nhu cầu vận chuyển.</p>
                        </article>
                    </div>
                    <div class="col">
                        <article class="process-card">
                            <span class="process-number">02</span>
                            <h3>Tiếp nhận đơn hàng</h3>
                            <p>Xác nhận yêu cầu và phương án thực hiện.</p>
                        </article>
                    </div>
                    <div class="col">
                        <article class="process-card">
                            <span class="process-number">03</span>
                            <h3>Đặt kho bãi &amp; lưu trữ</h3>
                            <p>Phối hợp xử lý và lưu trữ hàng hóa theo kế hoạch.</p>
                        </article>
                    </div>
                    <div class="col">
                        <article class="process-card">
                            <span class="process-number">04</span>
                            <h3>Vận chuyển &amp; giao hàng</h3>
                            <p>Điều phối vận chuyển và hoàn tất giao nhận.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        @php
            $services = [
                [
                    'id' => 'service-customs-clearance',
                    'title' => 'Đại lý Hải quan',
                    'image' => 'images/customs-clearance-team.png',
                ],
                [
                    'id' => 'service-cargo-insurance',
                    'title' => 'Bảo hiểm Hàng hóa',
                    'image' => 'images/cargo-handling-team.png',
                ],
                [
                    'id' => 'service-air-freight',
                    'title' => 'Vận chuyển Hàng không Quốc tế',
                    'image' => 'images/international-air-freight.png',
                ],
                [
                    'id' => 'service-sea-freight',
                    'title' => 'Vận chuyển Đường biển Quốc tế',
                    'image' => 'images/ocean-freight-vessel.png',
                ],
                [
                    'id' => 'service-domestic-transport',
                    'title' => 'Vận chuyển Nội địa',
                    'image' => 'images/domestic-transport.png',
                ],
                [
                    'id' => 'service-heavy-lift',
                    'title' => 'Nâng hạ - Cẩu - Lắp đặt hàng siêu trường, siêu trọng',
                    'image' => 'images/heavy-lift-crane-installation.png',
                ],
                [
                    'id' => 'service-warehouse-distribution',
                    'title' => 'Cho thuê Kho bãi & Phân phối hàng hóa',
                    'image' => 'images/warehouse-sorting-facility.png',
                ],
                [
                    'id' => 'service-import-export-documents',
                    'title' => 'Dịch vụ Chứng từ & Tư vấn Xuất Nhập khẩu',
                    'image' => 'images/import-export-documentation.png',
                ],
            ];
        @endphp

        <section class="section section-services" id="services" aria-labelledby="services-title">
            <div class="container">
                <div class="section-heading">
                    <p class="section-kicker">GIẢI PHÁP CHUỖI CUNG ỨNG</p>
                    <h2 class="section-title" id="services-title">DỊCH VỤ CỦA SUDES LOGISTICS</h2>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 g-4">
                    @foreach ($services as $service)
                        <div class="col">
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
                                    <a class="service-more" href="#contact">
                                        Tìm hiểu thêm
                                        <span aria-hidden="true">→</span>
                                    </a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section section-why" id="why-us" aria-labelledby="why-title">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-12 col-lg-5">
                        <p class="section-kicker">NĂNG LỰC VẬN HÀNH</p>
                        <h2 class="section-title" id="why-title">TẠI SAO CHỌN CHÚNG TÔI?</h2>
                        <h3>Với 10 năm kinh nghiệm</h3>
                        <p>
                            Trở thành công ty hậu cần chuỗi cung ứng được ưa thích nhất
                            trên thế giới nhờ hiểu biết sâu sắc, chất lượng dịch vụ,
                            đổi mới và tăng trưởng không ngừng cho doanh nghiệp và xã hội.
                        </p>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="row row-cols-2 row-cols-md-3 g-3">
                            <div class="col">
                                <div class="stat-card">
                                    <strong>30</strong>
                                    <span>Cụm kho trên toàn quốc</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="stat-card">
                                    <strong>300.000 m³</strong>
                                    <span>Tổng sức chứa</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="stat-card">
                                    <strong>250</strong>
                                    <span>Cán bộ nhân viên</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="stat-card">
                                    <strong>100</strong>
                                    <span>Xe tải chuyên dụng</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="stat-card">
                                    <strong>5.000+</strong>
                                    <span>Khách hàng tin tưởng</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="stat-card">
                                    <img
                                        src="{{ asset('images/coverage/vietnam-logistics-network-map.png') }}"
                                        alt="Mạng lưới logistics Việt Nam"
                                        loading="lazy"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @php
            $newsItems = [
                [
                    'title' => 'Xu hướng Nổi bật trong Logistics Toàn cầu: Định hình Tương lai Chuỗi Cung ứng',
                    'description' => 'Công nghệ, kỳ vọng khách hàng và yêu cầu phát triển bền vững đang thúc đẩy ngành logistics thay đổi nhanh chóng.',
                    'image' => 'images/logistics-network-aerial.png',
                ],
                [
                    'title' => 'Tối ưu hóa Hiệu quả Vận tải trong Logistics: Chìa khóa tăng trưởng bền vững',
                    'description' => 'Tối ưu hoạt động vận tải giúp tiết kiệm chi phí, nâng cao chất lượng dịch vụ và tăng sức cạnh tranh cho chuỗi cung ứng.',
                    'image' => 'images/conveyor-sorting-facility.png',
                ],
                [
                    'title' => 'Logistics ngược: Xu hướng quan trọng trong chuỗi cung ứng hiện đại',
                    'description' => 'Logistics ngược quản lý dòng hàng quay trở lại điểm xuất phát nhằm thu hồi giá trị hoặc xử lý hàng hóa.',
                    'image' => 'images/warehouse-sorting-operations.png',
                ],
                [
                    'title' => 'Ngành Logistics: Động lực tăng trưởng và những thách thức mới',
                    'description' => 'Số hóa, thương mại điện tử và biến động thị trường đang định hình những cơ hội cũng như thách thức mới của ngành.',
                    'image' => 'images/multimodal-logistics-collage.png',
                ],
            ];
        @endphp

        <section class="section section-news" id="news" aria-labelledby="news-title">
            <div class="container">
                <div class="section-heading">
                    <p class="section-kicker">CẬP NHẬT KIẾN THỨC NGÀNH</p>
                    <h2 class="section-title" id="news-title">TIN TỨC MỚI NHẤT</h2>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4">
                    @foreach ($newsItems as $news)
                        <div class="col">
                            <article class="news-card">
                                <div class="news-image">
                                    <img
                                        src="{{ asset($news['image']) }}"
                                        alt=""
                                        loading="lazy"
                                    >
                                </div>
                                <div class="news-content">
                                    <time datetime="2025-06-02">02/06/2025</time>
                                    <h3>{{ $news['title'] }}</h3>
                                    <p class="news-description">{{ $news['description'] }}</p>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section section-faq" id="faq" aria-labelledby="faq-title">
            <div class="container">
                <div class="row align-items-start g-4 g-xl-5">
                    <div class="col-12 col-lg-5">
                        <p class="section-kicker">HỖ TRỢ KHÁCH HÀNG</p>
                        <h2 class="section-title" id="faq-title">CÂU HỎI THƯỜNG GẶP</h2>
                        <img
                            class="faq-image"
                            src="{{ asset('images/about/company-logistics-collage.png') }}"
                            alt="Hoạt động logistics"
                            loading="lazy"
                        >
                    </div>
                    <div class="col-12 col-lg-7">
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

        <section class="section section-testimonials" id="testimonials"
            aria-labelledby="testimonials-title">
            <div class="container">
                <div class="section-heading section-heading-centered">
                    <p class="section-kicker">KHÁCH HÀNG NÓI GÌ</p>
                    <h2 class="section-title" id="testimonials-title">ĐÁNH GIÁ KHÁCH HÀNG</h2>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <article class="testimonial-card">
                            <img
                                src="{{ asset('images/testimonials/customer-portrait-01.png') }}"
                                alt=""
                                loading="lazy"
                            >
                            <h3>Nguyễn Trung Anh</h3>
                            <p>Giám đốc Logistics – Công ty cổ phần May mặc K&amp;K</p>
                        </article>
                    </div>
                    <div class="col">
                        <article class="testimonial-card">
                            <img
                                src="{{ asset('images/testimonials/customer-portrait-02.png') }}"
                                alt=""
                                loading="lazy"
                            >
                            <h3>Nguyễn Ngọc Sơn</h3>
                            <p>Quản lý Vận hành – Công ty CP Thực phẩm Đông Nam</p>
                        </article>
                    </div>
                    <div class="col">
                        <article class="testimonial-card">
                            <img
                                src="{{ asset('images/testimonials/customer-portrait-03.png') }}"
                                alt=""
                                loading="lazy"
                            >
                            <h3>Lê Quang Hải</h3>
                            <p>Trưởng phòng Mua hàng – Công ty TNHH Thiết bị Công nghiệp HT</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection