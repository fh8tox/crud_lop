<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chào mừng</title>

    <!-- Bootstrap (cho đẹp) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
        }
        .card-box {
            margin-top: 100px;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body>

<div class="container text-center">
    <div class="card card-box">

        <h1 class="mb-3">🎓 HỆ THỐNG QUẢN LÝ SINH VIÊN</h1>

        <h3 class="mb-4">
            ✏️ Thêm - Sửa - Xóa Lớp Học <br>
            <strong>- Nguyễn Hữu Phước -</strong>
        </h3>

        <p class="text-muted">
            Hệ thống hỗ trợ quản lý lớp học, sinh viên, môn học và điểm số.
        </p>

        <!-- Nút chuyển trang -->
        <a href="{{ route('classes.index') }}" class="btn btn-primary btn-lg mt-3">
            🚀 Vào quản lý lớp học
        </a>

    </div>
</div>

</body>
</html>