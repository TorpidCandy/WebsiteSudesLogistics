<footer class="site-footer" id="contact">

    {{-- CTA BAND --}}
    <section class="footer-contact-band">
        <div class="container">
            <div class="row align-items-center g-3">
                <div class="col-12 col-lg">
                    <p class="footer-kicker">KẾT NỐI VỚI CHÚNG TÔI</p>
                    <h2>Giải pháp vận chuyển tối ưu, chỉ cách bạn một cú nhấp chuột!</h2>
                </div>
                <div class="col-12 col-lg-auto">
                    <a class="button button-light" href="tel:19006750">
                        Liên hệ ngay
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- FOOTER MAIN --}}
    <div class="footer-main">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 g-xl-5">

                {{-- Cột 1: Thương hiệu và liên hệ --}}
                <div class="col">
                    <a class="footer-brand" href="{{ url('/') }}">
                        <img
                            src="{{ asset('images/sudes-logo-footer-white.png') }}"
                            alt="Sudes Logistics"
                            loading="lazy"
                        >
                    </a>
                    <p class="footer-description">
                        Đơn vị cung cấp giải pháp vận tải và hậu cần chuyên nghiệp, linh hoạt
                        và tối ưu chi phí. Chúng tôi đồng hành cùng doanh nghiệp trong việc
                        quản lý chuỗi cung ứng hiệu quả, từ vận chuyển nội địa, quốc tế đến
                        kho bãi và khai báo hải quan.
                    </p>
                    <div class="footer-contact-list">
                        <a href="tel:19006750">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M5 3h4l2 5-3 2a15 15 0 0 0 6 6l2-3 5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 5a2 2 0 0 1 2-2Z" />
                            </svg>
                            1900 6750
                        </a>
                        {{-- Email chờ chủ project xác nhận địa chỉ thật --}}
                        <a href="mailto:support@sapo.vn">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <rect x="2" y="4" width="20" height="16" rx="1" />
                                <path d="m3 5 9 8 9-8" />
                            </svg>
                            support@sapo.vn
                        </a>
                    </div>
                    <div class="footer-socials">
                        <a class="footer-social-link" href="#" aria-label="Facebook">f</a>
                        <a class="footer-social-link" href="#" aria-label="Twitter">t</a>
                        <a class="footer-social-link" href="#" aria-label="Youtube">
                            <svg viewBox="0 0 24 24" aria-hidden="true" width="16" height="16">
                                <path class="yt-body" d="M23 7.2a3 3 0 0 0-2.1-2.1C19 4.6 12 4.6 12 4.6s-7 0-8.9.5A3 3 0 0 0 1 7.2 31 31 0 0 0 .5 12a31 31 0 0 0 .5 4.8 3 3 0 0 0 2.1 2.1c1.9.5 8.9.5 8.9.5s7 0 8.9-.5a3 3 0 0 0 2.1-2.1 31 31 0 0 0 .5-4.8 31 31 0 0 0-.5-4.8Z" />
                                <path class="yt-play" d="m10 8.5 6 3.5-6 3.5Z" />
                            </svg>
                        </a>
                        <a class="footer-social-link" href="#" aria-label="Instagram">
                            <svg viewBox="0 0 24 24" aria-hidden="true" width="16" height="16">
                                <rect x="3" y="3" width="18" height="18" rx="5" fill="none" stroke="currentColor" stroke-width="2" />
                                <circle cx="12" cy="12" r="4" fill="none" stroke="currentColor" stroke-width="2" />
                                <circle cx="18" cy="6" r="1" fill="currentColor" />
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Cột 2: Thông tin --}}
                <div class="col">
                    <h2 class="footer-heading">Thông tin</h2>
                    <ul class="footer-links">
                        <li><a href="{{ url('/') }}">Trang chủ</a></li>
                        <li><a href="{{ url('/#about') }}">Giới thiệu</a></li>
                        <li><a href="{{ url('/#about') }}">Lịch sử hình thành</a></li>
                        <li><a href="{{ url('/#process') }}">Quy trình làm việc</a></li>
                        <li><a href="{{ url('/#services') }}">Dịch vụ</a></li>
                        <li><a href="{{ url('/#news') }}">Tin tức</a></li>
                        <li><a href="#">Thư viện</a></li>
                        <li><a href="{{ url('/#faq') }}">Câu hỏi thường gặp</a></li>
                        <li><a href="{{ url('/#contact') }}">Liên hệ</a></li>
                    </ul>
                </div>

                {{-- Cột 3: Dịch vụ --}}
                <div class="col">
                    <h2 class="footer-heading">Dịch vụ</h2>
                    <ul class="footer-links">
                        <li><a href="{{ url('/#service-customs-clearance') }}">Đại lý Hải quan</a></li>
                        <li><a href="{{ url('/#service-cargo-insurance') }}">Bảo hiểm Hàng hóa</a></li>
                        <li><a href="{{ url('/#service-air-freight') }}">Vận chuyển Hàng không Quốc tế</a></li>
                        <li><a href="{{ url('/#service-sea-freight') }}">Vận chuyển Đường biển Quốc tế</a></li>
                        <li><a href="{{ url('/#service-domestic-transport') }}">Vận chuyển Nội bộ</a></li>
                        <li><a href="{{ url('/#service-heavy-lift') }}">Nâng hạ - Cẩu - Lắp đặt hàng siêu trường, siêu trọng</a></li>
                        <li><a href="{{ url('/#service-warehouse-distribution') }}">Cho thuê Kho bãi &amp; Phân phối hàng hóa</a></li>
                        <li><a href="{{ url('/#service-import-export-documents') }}">Dịch vụ Chứng từ &amp; Tư vấn Xuất Nhập khẩu</a></li>
                    </ul>
                </div>

                {{-- Cột 4: Thời gian làm việc --}}
                <div class="col">
                    <h2 class="footer-heading">Thời gian làm việc</h2>
                    <p>Từ thứ 2 đến thứ 7 hàng tuần (Nghỉ chủ nhật)</p>
                    <p class="footer-hours">8h00 - 22h00</p>
                </div>

            </div>
        </div>
    </div>

    {{-- FOOTER BOTTOM --}}
    <div class="footer-bottom">
        <div class="container">
            <p>© Bản quyền thuộc về Sudes Team | Cung cấp bởi Sapo</p>
        </div>
    </div>

</footer>