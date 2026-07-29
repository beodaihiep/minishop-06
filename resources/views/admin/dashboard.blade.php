<!DOCTYPE html>
<html>
<head>
    <title>MiniShop Admin — Dashboard</title>
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
    
    <h1>MiniShop Admin — Dashboard</h1>
    <ul>
        <li data-testid="categories">Categories: {{ $stats['categories'] }}</li>
        <li data-testid="products">Products: {{ $stats['products'] }}</li>
        <li data-testid="inventory_value">Inventory Value: {{ number_format($stats['inventory_value']) }}</li>
    </ul>
</body>
</html>
