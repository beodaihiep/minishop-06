Browser (GET /admin/products)
    ↓
public/index.php (Document Root — Nơi duy nhất công khai ra bên ngoài)
    ↓
bootstrap/app.php & Middleware (Khởi tạo khung ứng dụng & xử lý các request middleware)
    ↓
routes/web.php (Khớp URI '/admin/products' với route name 'admin.products.index')
    ↓
App\Http\Controllers\Admin\ProductController@index (Gọi action index để xử lý logic)
    ↓
resources/views/admin/products/index.blade.php (Render file giao diện Blade)
    ↓
HTML Response gửi về Browser
