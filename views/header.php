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
    <link rel="icon" href="images/fevicon.png" type="../image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Cửa Hàng Đồng Hồ</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
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
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <div class="me-3 my-3 mb-3">
                    <img src="images/logo.jpg" alt="Logo" class="rounded-circle" style="width: 80px; height: 80px;">
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
                <div class="boxfooter searbox mt-3">
                    <form action="sanphamtimkiem.php" method="post" class="input-group">
                        <input type="text" class="form-control" name="kyw" placeholder="Tìm kiếm sản phẩm...">
                    </form>
                </div>
                <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="text-white nav-link fw-bold " href="index.php">
                                <i class="fa fa-home"></i> Trang Chủ <span class="sr-only"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-white nav-link" href="about.php">
                                <span class="ms-1 fw-bold"> <i class="fa fa-info-circle"></i> Giới
                                    Thiệu</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-white nav-link fw-bold" href="dongho.php">
                                <i class="fa fa-clock"></i> Đồng Hồ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-white nav-link fw-bold" href="blog.php">
                                <i class="fa fa-edit"></i> Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-white nav-link fw-bold" href="contact.php">
                                <i class="fa fa-envelope"></i> Liên Hệ
                            </a>
                        </li>
                        <?php
                            if (isset($_SESSION["user"])) {
                                echo ("<div class='quote_btn-container'>");
                                echo ("<a href='giohang.php' class='text-white nav-link fw-bold'>Giỏ hàng</a>") . "<br>";
                                echo ("<a href='danhsachhoadon.php' class='text-white nav-link fw-bold'>Hoá đơn</a>") . "<br>";
                                echo ("<a href='thongtintaikhoan.php' class='text-white nav-link fw-bold'><i class='fa fa-user-circle'></i>Thông tin tài khoản</a>") . "<br>";
                                echo ("<a href='taikhoan/dangxuat.php' class='text-white nav-link fw-bold'><i class='fas fa-sign-out-alt'></i> Đăng xuất </a>");
                                echo ("</div>");
                            } else {
                            ?>
                        <div class="quote_btn-container">
                            <a href="login.php" class=" nav-link text-decoration-none fw-bold text-white">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span>Đăng Ký/Đăng Nhập</span>
                            </a>
                        </div>
                        <?php
                            }
                            ?>
                    </ul>

                </div>
            </div>



        </nav>
    </header>
    <!-- slider section -->
    <?php
    $currentURL = "$_SERVER[REQUEST_URI]";
    if ($currentURL == "/webbandongho/index.php") {
        include "views/slider.php";
    }
    ?>
    <!-- end slider section -->