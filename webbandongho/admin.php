<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Cửa hàng đồng hồ</title>

    <link href="css/style.css" rel="stylesheet" />
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
    </style>
</head>

<body>
    <div class="menudangky">
        <h5>ĐĂNG NHẬP</h5>
        <form action="admin/xulydangnhapadmin.php" method="post">
            <div class="row mb10">
                Tên đăng nhập<br>
                <input type="text" name="username">
            </div>
            <div class="row mb10">
                Mật khẩu<br>
                <input type="password" name="pass"><br>
            </div>
            <div class="row mb10">
                <input type="checkbox" name="">Ghi nhớ tài khoản?<br>
            </div>
            <div class="row mb10">
                <input type="submit" value="Đăng nhập" name="sbmdangnhap">
            </div>
        </form>
    </div>
</body>

</html>