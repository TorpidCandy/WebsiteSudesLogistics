    <div class="site-topbar">
        <div class="container-xl d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-2">
            <span>Thời gian làm việc: <strong>8h - 22h</strong> từ thứ 2 đến chủ nhật</span>
            <a class="topbar-phone" href="tel:19006750">Hotline: 1900 6750</a>
        </div>
    </div>

    <header class="site-header">
        <nav class="navbar navbar-expand-lg container-xl">
            <a class="site-brand" href="{{ url('/') }}" aria-label="Sudes Logistics - Trang chủ">
                <img
                    class="site-brand-logo"
                    src="{{ asset('images/branding/sudes-logo-header-white.png') }}"
                    alt="Sudes Logistics"
                >
            </a>

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
                <ul class="navbar-nav ms-lg-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="/" aria-current="page">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>
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
                            <li><a class="dropdown-item" href="#">Cho thuê Kho bãi & Phân phối</a></li>
                            <li><a class="dropdown-item" href="#">Chứng từ & Tư vấn Xuất Nhập khẩu</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                    <li class="nav-item nav-quote-item">
                        <a class="nav-link nav-quote" href="#">BÁO GIÁ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>