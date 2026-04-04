<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý sinh viên</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }

        .sidebar {
            height: 100vh;
            background: #343a40;
            color: white;
            padding: 20px;
        }

        .sidebar a {
            color: white;
            display: block;
            padding: 10px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #495057;
            border-radius: 5px;
        }

        .content {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 sidebar">
            <h4>📚 Menu</h4>

            <a href="{{ url('/') }}">🏠 Trang chủ</a>
            <a href="{{ route('classes.index') }}">🏫 Quản lý lớp</a>
            <a href="#">👨‍🎓 Sinh viên</a>
            <a href="#">📘 Môn học</a>
            <a href="#">📝 Điểm</a>
        </div>

        <!-- Nội dung -->
        <div class="col-md-10 content">

            @yield('content')

        </div>

    </div>
</div>

</body>
</html>