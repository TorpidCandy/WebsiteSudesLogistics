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
                    <div class="site-nav-carousel">

                        <div class="swiper site-nav-swiper" data-nav-slider>
                            <ul class="navbar-nav swiper-wrapper">
                                <li class="nav-item swiper-slide">
                                    <a class="nav-link active" href="{{ url('/') }}" aria-current="page">
                                        <svg class="nav-home-icon" viewBox="0 0 24 24" aria-hidden="true">
                                            <path d="m3 11 9-8 9 8v10h-6v-6H9v6H3Z" />
                                        </svg>
                                        Trang chủ
                                    </a>
                                </li>

                                <li class="nav-item swiper-slide">
                                    <a class="nav-link" href="#">Giới thiệu</a>
                                </li>

                                <li class="nav-item swiper-slide">
                                    <a class="nav-link" href="#">Lịch sử hình thành</a>
                                </li>

                                <li class="nav-item swiper-slide">
                                    <button
                                        class="nav-link nav-dropdown-trigger"
                                        type="button"
                                        data-nav-dropdown-trigger="services"
                                        aria-expanded="false"
                                        aria-controls="sudesDropdownPanel"
                                    >
                                        Dịch vụ
                                        <span class="nav-dropdown-caret" aria-hidden="true"></span>
                                    </button>
                                </li>

                                <li class="nav-item swiper-slide">
                                    <a class="nav-link" href="#">Tin tức</a>
                                </li>

                                <li class="nav-item swiper-slide">
                                    <button
                                        class="nav-link nav-dropdown-trigger"
                                        type="button"
                                        data-nav-dropdown-trigger="library"
                                        aria-expanded="false"
                                        aria-controls="sudesDropdownPanel"
                                    >
                                        Thư viện
                                        <span class="nav-dropdown-caret" aria-hidden="true"></span>
                                    </button>
                                </li>

                                <li class="nav-item swiper-slide">
                                    <a class="nav-link" href="#">Câu hỏi thường gặp</a>
                                </li>

                                <li class="nav-item swiper-slide">
                                    <a class="nav-link" href="#">Liên hệ</a>
                                </li>
                            </ul>
                        </div>

                        <div class="site-nav-arrows">
                            <button
                                class="site-nav-arrow"
                                type="button"
                                data-nav-prev
                                aria-label="Danh mục trước"
                                disabled
                            >
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="m15 5-7 7 7 7" />
                                </svg>
                            </button>

                            <button
                                class="site-nav-arrow"
                                type="button"
                                data-nav-next
                                aria-label="Danh mục tiếp theo"
                            >
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="m9 5 7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="site-navigation-actions">
                    <div class="site-search-wrap">
                        <button
                            class="site-search"
                            type="button"
                            data-search-trigger
                            aria-label="Mở tìm kiếm"
                            aria-expanded="false"
                            aria-controls="sudesSearchPanel"
                        >
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <circle cx="10.5" cy="10.5" r="7.5" />
                                <path d="m16 16 6 6" />
                            </svg>
                        </button>

                        <form
                            class="site-search-panel"
                            id="sudesSearchPanel"
                            role="search"
                            action="{{ url('/') }}"
                            method="get"
                        >
                            <input
                                class="site-search-input"
                                type="search"
                                name="q"
                                placeholder="Tìm kiếm"
                                aria-label="Nhập từ khóa tìm kiếm"
                            >

                            <button class="site-search-submit" type="submit" aria-label="Tìm kiếm">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <circle cx="10" cy="10" r="6.5" />
                                    <path d="m15 15 6 6" />
                                </svg>
                            </button>
                        </form>
                    </div>

                    <a class="nav-quote" href="#" aria-label="Báo giá">
                        <svg viewBox="0 0 36 30" aria-hidden="true">
                            <path d="M13 4h21v22H13Z" />
                            <path d="m14 5 9.5 8L33 5" />
                            <path d="M1 10h8M3 20h6" />
                        </svg>
                        <span>BÁO GIÁ</span>
                    </a>
                </div>

                <div
                    class="site-dropdown-panel"
                    id="sudesDropdownPanel"
                    data-nav-dropdown-panel
                    aria-hidden="true"
                >
                    <div data-nav-dropdown-content="services" hidden>
                        <a class="site-dropdown-link" href="#">Đại lý Hải quan</a>
                        <a class="site-dropdown-link" href="#">Bảo hiểm Hàng hóa</a>
                        <a class="site-dropdown-link" href="#">Vận chuyển Hàng không Quốc tế</a>
                        <a class="site-dropdown-link" href="#">Vận chuyển Đường biển Quốc tế</a>
                        <a class="site-dropdown-link" href="#">Vận chuyển Nội bộ</a>
                        <a class="site-dropdown-link" href="#">Nâng hạ - Cẩu - Lắp đặt</a>
                        <a class="site-dropdown-link" href="#">Cho thuê Kho bãi &amp; Phân phối</a>
                        <a class="site-dropdown-link" href="#">Chứng từ &amp; Tư vấn Xuất Nhập khẩu</a>
                    </div>

                    <div data-nav-dropdown-content="library" hidden>
                        <a class="site-dropdown-link" href="#">Thư viện video</a>
                        <a class="site-dropdown-link" href="#">Thư viện album</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>