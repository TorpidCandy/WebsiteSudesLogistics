# WebsiteSudesLogistics

Trang chủ Sudes Logistics được triển khai trên Laravel 13, PHP 8.4 và Bootstrap 5. CSS/JavaScript giao diện dùng tài nguyên tĩnh; không dùng Vite/npm build trong workflow sửa giao diện thông thường.

## Nguồn tham chiếu

- Demo được quản lý chỉ định: https://themes.sapo.vn/demo/sudes-logistics
- Trang preview của theme: https://sudes-logistics.mysapo.net/

Phạm vi là trang chủ, responsive trên mobile và ưu tiên độ sát bố cục. Tự viết HTML/CSS bằng Bootstrap, Grid và Flexbox; không sao chép source hoặc class nội bộ của theme. Giữ slider đơn giản. Không làm section “CÙNG BẠN VƯỢT MỌI GIỚI HẠN”, widget tích hợp ứng dụng hoặc Messenger.

## Chạy local

```bat
cd /d C:\xampp\htdocs\WebsiteSudesLogistics
php artisan serve