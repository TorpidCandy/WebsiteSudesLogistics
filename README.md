# WebsiteSudesLogistics

Trang chủ Sudes Logistics được triển khai trực tiếp trên Laravel 13, dùng Bootstrap 5 và Vite. Đây là dự án độc lập, không dùng chung source với WebsiteIBPTechnology hoặc WebsiteBulongKimAnThinh.

## Nguồn tham chiếu giao diện

https://themes.sapo.vn/demo/sudes-logistics

Phạm vi được giao: trang chủ; bố cục gần bản tham khảo; responsive mobile; slider đơn giản; không sao chép mã nguồn hoặc class nội bộ của theme gốc. Không dựng mục “CÙNG BẠN VƯỢT MỌI GIỚI HẠN”, widget tích hợp ứng dụng hoặc Messenger. GTranslate là tùy chọn. Nút mũi tên và các hành vi hiển thị khi cuộn trang phải được kiểm tra trên trang tham khảo trước khi triển khai.

## Yêu cầu môi trường

- PHP 8.3 trở lên (môi trường hiện tại: PHP 8.4.26)
- Composer
- Node.js và npm

## Chạy local

Terminal 1:

```bat
cd /d C:\xampp\htdocs\WebsiteSudesLogistics
npm run dev
```

Terminal 2:

```bat
cd /d C:\xampp\htdocs\WebsiteSudesLogistics
php artisan serve --host=127.0.0.1 --port=8000
```

Mở http://127.0.0.1:8001. Cổng 8001 tách biệt cổng Apache 8080 đang dùng cho IBP.

## Kiểm tra

```bat
npm run build
php artisan test
php artisan route:list
```

Không commit `.env`, `vendor/`, `node_modules/`, `public/build/` hoặc database SQLite cục bộ. Giữ checkpoint Git sạch trước mỗi batch thay đổi đáng kể.
