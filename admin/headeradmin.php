<?php session_start(); ?>
<!DOCTYPE html>
<html>

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

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- font awesome style -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="../css/responsive.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    <header class="header_section long_section px-0">
        <style>
        .nav-link:hover {
            color: red !important;
        }
        </style>
        <nav class="bg-info navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand d-flex align-items-center" href="../index.php">
                <div class="me-3 my-3 mb-3">
                    <img src="../images/logo.jpg" alt="Logo" class="rounded-circle" style="width: 80px; height: 80px;">
                    <span class="text-white">Cửa Hàng Đồng Hồ</span>
                </div>

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Tìm kiếm Sản phẩm -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
                <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="text-white nav-link ms-1 fw-bold " href="../admin/sanphamadmin.php">
                                <i class="fa fa-clock"></i> Sản Phẩm Đồng Hồ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-white nav-link fw-bold" href="../admin/thanhvienadmin.php">
                                <i class="fa fa-users"></i> Thành Viên
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-white nav-link fw-bold" href="../admin/qtvadmin.php">
                                <i class="fa fa-cogs"></i> Quản Trị Viên
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-white nav-link fw-bold" href="../admin/giohangadmin.php">
                                <i class="fa fa-cogs"></i> Danh Sách Giỏ Hành
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-white nav-link fw-bold" href="../admin/hoadonadmin.php">
                                <i class="fa fa-cogs"></i> Danh Sách Hoá Đơn
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-white nav-link fw-bold" href="../admin/thongkeadmin.php">
                                <i class="fa fa-chart-pie"></i> Thống Kê
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <?php
                if (isset($_SESSION["qtri"])) {
                    echo ("<div class='quote_btn-container'>");
                    echo ("<a href='../taikhoan/dangxuat.php' class='text-white nav-link text-decoration-none fw-bold'><i class='fas fa-sign-out-alt'></i> Đăng xuất </a>");
                    echo ("</div>");
                } else {
                ?>
            <?php
                }
                ?>

        </nav>
    </header>