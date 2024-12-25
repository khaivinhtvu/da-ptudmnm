<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng - Shop Đồng Hồ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
    .cart-item {
        border-bottom: 1px solid #ddd;
        padding: 15px 0;
    }

    .cart-item img {
        width: 80px;
        height: 80px;
    }

    .cart-item-name {
        font-size: 1.2rem;
        font-weight: bold;
    }

    .cart-item-price {
        font-size: 1.1rem;
        color: #007bff;
    }

    .cart-total {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .btn-checkout {
        background-color: #007bff;
        color: white;
    }

    .btn-checkout:hover {
        background-color: #0056b3;
    }

    .cart-container {
        margin-top: 50px;
    }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="bg-info navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <div class="me-3 my-3 mb-3">
                <img src="images/logo.jpg" alt="Logo" class="rounded-circle" style="width: 80px; height: 80px;">
                <span class="text-white fw-bold">CỬA HÀNG ĐỒNG HỒ</span>
            </div>

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Tìm kiếm Sản phẩm -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <div class="boxfooter searbox mt-3">
                <form action="index.php?act=sanpham" method="post" class="input-group">
                    <input type="text" class="form-control" name="kyw" placeholder="Tìm kiếm sản phẩm...">
                    <button type="submit" class="btn btn-outline-secondary " name="tiemkiem">
                        <i class="bi bi-search" style="color: white;"></i>
                    </button>
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
                </ul>
                <div class="quote_btn-container ms-3">
                    <a href="login.php" class=" nav-link text-decoration-none fw-bold text-white">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span>Đăng Ký/Đăng Nhập</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container my-5">

        <!-- Thông tin giỏ hàng -->
        <div class="cart-container border p-4 rounded shadow-sm">
            <h2 class="text-center mb-4">Thông Tin Giỏ Hàng</h2>
            <div class="cart-item row">
                <div class="col-md-2">
                    <img src="images/dh1.jpg" alt="Product Image">
                </div>
                <div class="col-md-6">
                    <div class="cart-item-name">Đồng Hồ Thể Thao</div>
                    <div class="cart-item-price">1,200,000 VND</div>
                </div>
                <div class="col-md-2">
                    <input type="number" class="form-control" value="1" min="1">
                </div>
                <div class="col-md-2 text-center">
                    <button class="btn btn-danger">Xóa</button>
                </div>
            </div>
            <div class="cart-item row">
                <div class="col-md-2">
                    <img src="images/dh2.jpg" alt="Product Image">
                </div>
                <div class="col-md-6">
                    <div class="cart-item-name">Đồng Hồ Chính Hãng</div>
                    <div class="cart-item-price">2,500,000 VND</div>
                </div>
                <div class="col-md-2">
                    <input type="number" class="form-control" value="1" min="1">
                </div>
                <div class="col-md-2 text-center">
                    <button class="btn btn-danger">Xóa</button>
                </div>
            </div>

            <!-- Tổng tiền -->
            <div class="row mt-4">
                <div class="col-12 text-end">
                    <h4>Tổng tiền: <span class="cart-total">3,700,000 VND</span></h4>
                </div>
            </div>
        </div>

        <!-- Thông tin đặt hàng -->
        <div class="mt-5">
            <h2 class="section-title">Thông Tin Đặt Hàng</h2>
            <form>
                <div class="mb-3">
                    <label for="fullName" class="form-label">Họ và tên</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Nhập họ và tên của bạn">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Nhập email của bạn">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="phone" placeholder="Nhập số điện thoại của bạn">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Địa chỉ giao hàng</label>
                    <textarea class="form-control" id="address" rows="3"
                        placeholder="Nhập địa chỉ giao hàng"></textarea>
                </div>
            </form>
        </div>

        <!-- Phương thức thanh toán -->
        <div class="mt-5">
            <h2 class="section-title">Phương Thức Thanh Toán</h2>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentMethod" id="creditCard" value="creditCard"
                    checked>
                <label class="form-check-label" for="creditCard">
                    Thanh toán qua thẻ tín dụng
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentMethod" id="cashOnDelivery"
                    value="cashOnDelivery">
                <label class="form-check-label" for="cashOnDelivery">
                    Thanh toán khi nhận hàng
                </label>
            </div>
        </div>

        <!-- Nút Đặt Hàng -->
        <div class="mt-5 text-center">
            <a href="hoadon.php" class="btn btn-primary btn-checkout">Đặt Hàng</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-info py-4 text-white text-center">
        <section class="bg-info info_section long_section">

            <div class="container py-5">
                <div class="contact_nav ">
                    <a class="text-white" href="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                            Call : +01 123455678990
                        </span>
                    </a><br>
                    <a class="text-white" href="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>
                            Email : demo@gmail.com
                        </span>
                    </a><br>
                    <a class="text-white" href="">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>
                            Địa Chỉ
                        </span>
                    </a>
                </div>

                <div class="info_top ">
                    <div class="row ">
                        <div class=" col-sm-6 col-md-4 col-lg-3">
                            <div class="info_links ">
                                <div class="info_links_menu">
                                    <a class="text-white" href="index.php">Trang Chủ<span
                                            class="sr-only"></span></a><br>
                                    <a class="text-white" href="about.php">Giới Thiệu</a><br>
                                    <a class="text-white" href="dongho.php">Đồng Hồ</a><br>
                                    <a class="text-white" href="blog.php">Blog</a><br>
                                    <a class="text-white" href="contact.php">Liên Hệ</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
                            <div class="info_post">

                            </div>
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>