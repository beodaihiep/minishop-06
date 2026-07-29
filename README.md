# MiniShop Laravel — cse485-ms-06

## Cai dat
- PHP version: >= 8.1
- composer install
- cp .env.example .env && php artisan key:generate
- php artisan serve

## Tien do MiniShop
- [x] Route admin
- [ ] Blade layout (P07)
- [ ] Migration 2 bang (P08)
- [ ] CRUD 2 bang (P12)

## Giải thích về Document Root
Thư mục `public/` là Document Root duy nhất được web server (Nginx/Apache) chỉ tới để bảo mật mã nguồn ứng dụng. Khi web server chỉ trỏ vào `public/`, các tệp nhạy cảm bên ngoài như `.env` hay toàn bộ mã nguồn PHP đều không thể bị truy cập trực tiếp bằng URL bởi người dùng (client). Điều này ngăn chặn việc lộ lọt thông tin cấu hình và mã nguồn quan trọng.
