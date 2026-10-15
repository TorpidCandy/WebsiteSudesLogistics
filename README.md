# WebsiteSudesLogistics

Trang chủ Sudes Logistics được triển khai bằng Laravel 13, PHP 8.4, Blade và Bootstrap 5. Giao diện dùng CSS/JavaScript tĩnh; không cần Vite/npm build cho công việc chỉnh HTML, CSS hoặc JS thông thường.

## Nguồn tham chiếu và phạm vi

- Demo chuẩn do quản lý chỉ định: https://themes.sapo.vn/demo/sudes-logistics
- Trang preview liên kết từ demo: https://sudes-logistics.mysapo.net/
- Phạm vi: tái tạo trang chủ, ưu tiên độ sát bố cục và responsive mobile. Tự viết HTML/CSS bằng Bootstrap, Grid và Flexbox; không sao chép source hoặc class nội bộ của theme.
- Phải có hero slider và nút back-to-top hoạt động. Loại bỏ popup/widget quảng bá ứng dụng Sapo, nút nổi Liên hệ/Messenger và section “CÙNG BẠN VƯỢT MỌI GIỚI HẠN”. GTranslate là tùy chọn; AOS là yêu cầu hiện hành cho hiệu ứng xuất hiện khi cuộn và phải tôn trọng `prefers-reduced-motion`.

## Chạy local

Mở CMD/Terminal cửa sổ thứ nhất:

```bat
cd /d C:\xampp\htdocs\WebsiteSudesLogistics
php artisan serve --host=127.0.0.1 --port=8000
```

Mở trang tại http://127.0.0.1:8000/. Giữ cửa sổ server đang chạy.

## Chia sẻ preview qua ngrok

Mở CMD/Terminal cửa sổ thứ hai:

```bat
ngrok http 8000
```

Dùng URL HTTPS hiện tại ở dòng `Forwarding` của ngrok, thêm `/` để mở trang chủ. Giữ cả Laravel server và ngrok chạy; URL công khai có thể thay đổi giữa các phiên. Launcher Git chỉ push code, không khởi động server hoặc tunnel.

## Ghi chú phát triển

- File giao diện chính: `resources/views/index.blade.php`, `resources/views/layouts/app.blade.php`, `resources/views/partials/header.blade.php`, `public/css/style.css` và `public/js/main.js` khi thực sự cần JavaScript tùy chỉnh.
- Bootstrap CSS/JS nằm trong `public/vendor/bootstrap/`.
- Sau khi sửa Blade/CSS/JS, lưu và mở trang trong trình duyệt để kiểm tra. `php artisan route:list` chỉ xác minh danh sách route, không chứng minh trang render đúng.
- Không commit `.env`, credentials, database cục bộ, `vendor/`, `node_modules/` hoặc build artifacts không cần thiết.
