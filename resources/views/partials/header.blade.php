    <header class="site-header">
        <a
            class="site-brand"
            href="{{ url('/') }}"
            aria-label="Sudes Logistics - Trang chủ"
        >
            <img
                class="site-brand-logo"
                src="{{ asset('images/branding/sudes-logo-header-white.png') }}"
                alt="Sudes Logistics"
            >
        </a>

        <div class="site-header-main">
            <div class="site-topbar">
                <div class="site-topbar-socials" aria-label="Mạng xã hội">
                    <a class="site-social-link" href="#" aria-label="Facebook">
                        <span class="social-facebook" aria-hidden="true">f</span>
                    </a>

                    <a class="site-social-link" href="#" aria-label="Instagram">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <rect x="3" y="3" width="18" height="18" rx="5" />
                            <circle cx="12" cy="12" r="4" />
                            <circle class="social-dot" cx="18" cy="6" r="1" />
                        </svg>
                    </a>

                    <a class="site-social-link site-social-zalo" href="#" aria-label="Zalo">
                        Zalo
                    </a>

                    <a class="site-social-link" href="#" aria-label="YouTube">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                class="youtube-body"
                                d="M23 7.2a3 3 0 0 0-2.1-2.1C19 4.6 12 4.6 12 4.6s-7 0-8.9.5A3 3 0 0 0 1 7.2 31 31 0 0 0 .5 12a31 31 0 0 0 .5 4.8 3 3 0 0 0 2.1 2.1c1.9.5 8.9.5 8.9.5s7 0 8.9-.5a3 3 0 0 0 2.1-2.1 31 31 0 0 0 .5-4.8 31 31 0 0 0-.5-4.8Z"
                            />
                            <path class="youtube-play" d="m10 8.5 6 3.5-6 3.5Z" />
                        </svg>
                    </a>
                </div>

                <div class="site-topbar-contact">
                    <span class="topbar-contact-item">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="12" cy="12" r="9" />
                            <path d="M12 7v5l3 2" />
                        </svg>
                        <span>Thời gian làm việc: 8h - 22h từ thứ 2 đến chủ nhật</span>
                    </span>

                    <a class="topbar-contact-item" href="tel:19006750">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M5 3h4l2 5-3 2a15 15 0 0 0 6 6l2-3 5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 5a2 2 0 0 1 2-2Z" />
                        </svg>
                        <span>1900 6750</span>
                    </a>

                    <a class="topbar-contact-item" href="mailto:support@sapo.vn">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <rect x="2" y="4" width="20" height="16" rx="1" />
                            <path d="m3 5 9 8 9-8" />
                        </svg>
                        <span>support@sapo.vn</span>
                    </a>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg site-navigation">
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#sudesNavbar"
                    aria-controls="sudesNavbar"
                    aria-expanded="false"
                    aria-label="Mở menu điều hướng"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="sudesNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/') }}" aria-current="page">
                                <svg class="nav-home-icon" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="m3 11 9-8 9 8v10h-6v-6H9v6H3Z" />
                                </svg>
                                Trang chủ
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Giới thiệu</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Lịch sử hình thành</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="sudesServicesMenu"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Dịch vụ
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="sudesServicesMenu">
                                <li><a class="dropdown-item" href="#">Đại lý Hải quan</a></li>
                                <li><a class="dropdown-item" href="#">Bảo hiểm Hàng hóa</a></li>
                                <li><a class="dropdown-item" href="#">Vận chuyển Hàng không Quốc tế</a></li>
                                <li><a class="dropdown-item" href="#">Vận chuyển Đường biển Quốc tế</a></li>
                                <li><a class="dropdown-item" href="#">Vận chuyển Nội bộ</a></li>
                                <li><a class="dropdown-item" href="#">Nâng hạ - Cẩu - Lắp đặt</a></li>
                                <li><a class="dropdown-item" href="#">Cho thuê Kho bãi &amp; Phân phối</a></li>
                                <li><a class="dropdown-item" href="#">Chứng từ &amp; Tư vấn Xuất Nhập khẩu</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Tin tức</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Thư viện
                                <span class="nav-caret" aria-hidden="true">⌄</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Câu hỏi thường gặp</a>
                        </li>
                    </ul>
                </div>

                <div class="site-navigation-actions">
                    <a class="site-search" href="#" aria-label="Tìm kiếm">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="10.5" cy="10.5" r="7.5" />
                            <path d="m16 16 6 6" />
                        </svg>
                    </a>

                    <a class="nav-quote" href="#">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <rect x="2" y="4" width="20" height="16" rx="1" />
                            <path d="m3 5 9 8 9-8" />
                            <path d="M1 12h7m-3-3 3 3-3 3" />
                        </svg>
                        <span>BÁO GIÁ</span>
                    </a>
                </div>
            </nav>
        </div>
    </header>