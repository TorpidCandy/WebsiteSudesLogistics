<footer class="site-footer" id="contact">
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

    <div class="footer-main">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 g-xl-5">
                <div class="col">
                    <a class="footer-brand" href="{{ url('/') }}">
                        <img
                            src="{{ asset('images/branding/sudes-logo-footer-white.png') }}"
                            alt="Sudes Logistics"
                            loading="lazy"
                        >
                    </a>
                    <p class="footer-description">
                        Giải pháp vận tải, hậu cần và quản lý chuỗi cung ứng
                        phục vụ nhu cầu vận chuyển của doanh nghiệp.
                    </p>
                    <div class="footer-contact-list">
                        <a href="tel:19006750">1900 6750</a>
                        <a href="mailto:support@sapo.vn">support@sapo.vn</a>
                    </div>
                </div>

                <div class="col">
                    <h2 class="footer-heading">Thông tin</h2>
                    <ul class="footer-links">
                        <li><a href="{{ url('/') }}">Trang chủ</a></li>
                        <li><a href="{{ url('/#about') }}">Giới thiệu</a></li>
                        <li><a href="{{ url('/#process') }}">Quy trình làm việc</a></li>
                        <li><a href="{{ url('/#services') }}">Dịch vụ</a></li>
                        <li><a href="{{ url('/#news') }}">Tin tức</a></li>
                        <li><a href="{{ url('/#faq') }}">Câu hỏi thường gặp</a></li>
                        <li><a href="{{ url('/#contact') }}">Liên hệ</a></li>
                    </ul>
                </div>

                <div class="col">
                    <h2 class="footer-heading">Dịch vụ</h2>
                    <ul class="footer-links">
                        <li><a href="{{ url('/#services') }}">Đại lý Hải quan</a></li>
                        <li><a href="{{ url('/#services') }}">Bảo hiểm Hàng hóa</a></li>
                        <li><a href="{{ url('/#services') }}">Vận chuyển Hàng không Quốc tế</a></li>
                        <li><a href="{{ url('/#services') }}">Vận chuyển Đường biển Quốc tế</a></li>
                        <li><a href="{{ url('/#services') }}">Vận chuyển Nội bộ</a></li>
                        <li><a href="{{ url('/#services') }}">Nâng hạ - Cẩu - Lắp đặt</a></li>
                        <li><a href="{{ url('/#services') }}">Kho bãi &amp; Phân phối</a></li>
                        <li><a href="{{ url('/#services') }}">Chứng từ &amp; Tư vấn Xuất Nhập khẩu</a></li>
                    </ul>
                </div>

                <div class="col">
                    <h2 class="footer-heading">Thời gian làm việc</h2>
                    <p>Từ thứ 2 đến thứ 7 (nghỉ Chủ nhật)</p>
                    <p class="footer-hours">8h00 - 22h00</p>
                    <div class="footer-map-wrap">
                        <img
                            src="{{ asset('images/coverage/vietnam-logistics-network-map.png') }}"
                            alt="Mạng lưới logistics tại Việt Nam"
                            loading="lazy"
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <p>© Sudes Logistics. Bảo lưu mọi quyền.</p>
        </div>
    </div>
</footer>