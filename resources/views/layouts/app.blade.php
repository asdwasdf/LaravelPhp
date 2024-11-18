<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Quản lý khách hàng')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* Narrow Sidebar */
        .sidebar {
            max-width: 300px; /* Sidebar width reduced */
            height: 100vh;
            background-color: #f8f9fa;
            padding-top: 20px;
            border-right: 1px solid #ddd;
            flex-shrink: 0;
        }

        .sidebar a {
            text-decoration: none;
            color: #333;
            padding: 10px 15px;
            display: block;
            border-radius: 5px;
            margin: 5px 10px;
            font-size: 0.9rem; /* Adjust font size */
        }

        .sidebar a:hover {
            background-color: #e9ecef;
            color: #007bff;
        }

        .sidebar a.active {
            background-color: #007bff;
            color: #fff;
        }

        .sidebar a i {
            margin-right: 8px;
            font-size: 1rem; /* Adjust icon size */
        }

        .main-content {
            padding: 20px;
        }

        .flex-grow-1 {

           flex-grow: 1; /* Adjust width dynamically */
        }

        .topbar {
            height: 60px;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            border-bottom: 1px solid #ddd;
        }

        .topbar h1 {
            font-size: 18px;
            margin: 0;
        }

        .user-icon {
            font-size: 24px;
            color: #333;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <a href="{{ route('dashboard') }}"><i class="bi bi-house-door"></i> Trang chủ</a>
            <a href="{{ route('khach_hang.index') }}"><i class="bi bi-people"></i> Khách hàng</a>
            <a href="#"><i class="bi bi-card-list"></i> Giao dịch</a>
            <a href="{{route('hop_dong.index')}}"><i class="bi bi-file-earmark-text"></i> Hợp đồng</a>
            <a href="{{route('dich_vu.index')}}"><i class="bi bi-wrench"></i> Dịch vụ</a>
            <a href="#"><i class="bi bi-person-badge"></i> Nhân viên</a>
            <a href="#"><i class="bi bi-bar-chart"></i> Thống kê - Báo cáo</a>
            <a href="#"><i class="bi bi-person"></i> Tài khoản</a>
        </div>
        
        <!-- Main Content -->
        <div class="flex-grow-1 p-3">
            <h4 class="main-content text-center">CÔNG TY CỔ PHẦN PHẦN MỀM BRAVO</h4>
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
