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

    <title>Cửa Hàng Đồng Hồ</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .menudangky {
        background-color: green;
        border: 5px solid silver;
        color: white;
        margin: auto;
        padding: 20px;
        max-width: 400px;
        border-radius: 10px;
    }

    .menudangky h5 {
        text-align: center;
    }

    .menudangky button {
        background-color: white;
        color: green;
        border: 2px solid green;
        padding: 5px 15px;
        border-radius: 5px;
    }

    .menudangky button:hover {
        background-color: green;
        color: white;
    }

    .form-control {
        border-radius: 5px;
    }
    </style>
</head>

<body class="bg-light">

    <div class="menudangky shadow">
        <h5>ĐĂNG NHẬP</h5>
        <form action="xulydangnhap.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Tên đăng nhập</label>
                <input type="text" id="username" name="txtuser" class="form-control" placeholder="Nhập tên đăng nhập">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" id="password" name="txtpass" class="form-control" placeholder="Nhập mật khẩu">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" id="remember" class="form-check-input">
                <label for="remember" class="form-check-label">Ghi nhớ tài khoản?</label>
            </div>
            <div class="mb-3 text-center">
                <button type="button" class="btn btn-link text-primary">Quên Mật khẩu</button>
            </div>
            <div class="d-grid">
                <button type="submit" name="sbmdangnhap" class="btn btn-primary text-green">Đăng nhập</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>