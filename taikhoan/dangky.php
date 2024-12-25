<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="../images/fevicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Cửa Hàng Dồng Hồ</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .menudangky {
        background-color: green;
        border: 2px solid silver;
        color: white;
        margin: auto;
        padding: 20px;
        border-radius: 10px;
        max-width: 400px;
    }

    .menudangky h5 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-control {
        margin-bottom: 15px;
    }

    .form-check {
        color: white;
    }
    </style>
</head>

<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="menudangky">
            <h5>ĐĂNG KÝ</h5>
            <form action="xulydangky.php" method="post">
                <div class="mb-3">
                    <label for="txtTDNhap" class="form-label">Tên đăng nhập</label>
                    <input type="text" id="txtTDNhap" name="txtTDNhap" class="form-control" placeholder="Nhập tên đăng nhập"
                        required>
                </div>
                <div class="mb-3">
                    <label for="pswMKhau" class="form-label">Mật khẩu</label>
                    <input type="password" id="pswMKhau" name="pswMKhau" class="form-control" placeholder="Nhập mật khẩu"
                        required>
                </div>
                <div class="mb-3">
                    <label for="hoten" class="form-label">Họ và tên</label>
                    <input type="text" id="hoten" name="hoten" class="form-control" placeholder="Nhập họ và tên"
                        required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Nhập email" required>
                </div>
                <div class="mb-3">
                    <label for="diachi" class="form-label">Địa chỉ</label>
                    <input type="diachi" name="diachi" class="form-control" placeholder="Nhập địa chỉ" required>
                </div>
                <div class="mb-3">
                    <label for="sdt" class="form-label">Số điện thoại</label>
                    <input type="sdt" name="sdt" class="form-control" placeholder="Nhập số điện thoại" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-light text-dark" name="dangky">Đăng ký</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>