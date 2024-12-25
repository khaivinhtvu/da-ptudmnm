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
        .menudangky {
            background-color: green;
            border: 5px solid silver;
            color: white;
            margin: auto;
            line-height: 20px;
            padding: 10px 10px 10px 10px;
            width: 20%;
        }
        .menudangky h5{
            text-align: center;
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