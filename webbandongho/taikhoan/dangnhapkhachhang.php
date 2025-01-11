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
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .menudangky {
        background: linear-gradient(135deg, #4caf50, #81c784);
        border: none;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        color: white;
        padding: 20px;
        width: 300px;

    }

    .menudangky h5 {
        margin: 0 0 20px;
        font-size: 1.5rem;
        font-weight: bold;
        text-align: center;
    }

    .menudangky .row {
        margin-bottom: 15px;
    }

    .menudangky input[type="text"],
    .menudangky input[type="password"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .menudangky input[type="checkbox"] {
        margin-right: 10px;
    }

    .menudangky input[type="submit"] {
        background-color: #388e3c;
        border: none;
        color: white;
        padding: 10px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1rem;
        width: 100%;
    }

    .menudangky input[type="submit"]:hover {
        background-color: #2e7d32;
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