<!DOCTYPE html>
<html>
<head>
    <title>MiniShop Admin — About</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('admin.categories.index') }}">Categories</a></li>
            <li><a href="{{ route('admin.products.index') }}">Products</a></li>
            <li><a href="{{ route('admin.about') }}">About</a></li>
        </ul>
    </nav>

    <h1>MiniShop Admin — About</h1>
    <p>Lộ trình xây dựng MiniShop bắt đầu từ Phiếu 06 với việc cấu hình Route và Controller cơ bản. Tiếp theo, ở Phiếu 07 chúng ta sẽ xây dựng Blade Layout để tái sử dụng giao diện, tránh lặp lại mã. Sau đó, Phiếu 08 sẽ tập trung vào Migration và Faker để tạo và thêm dữ liệu giả cho 2 bảng Category và Product. Cuối cùng, Phiếu 12 sẽ hoàn thiện các chức năng CRUD cơ bản cho 2 bảng này, giúp quản trị viên dễ dàng thêm, sửa, xóa dữ liệu trên hệ thống.</p>
</body>
</html>
