<!-- header section strats -->
<?php include "views\header.php" ?>
<!-- end header section -->


    <!-- Giỏ Hàng -->
    <div class="container cart-container">
        <h2 class="text-center mb-4">Giỏ Hàng Của Bạn</h2>

        <!-- Cart Item -->
        <div class="cart-item row">
            <div class="col-md-2">
                <img src="images/dh2.jpg" alt="Product Image">
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

        <!-- Cart Item -->
        <div class="cart-item row">
            <div class="col-md-2">
                <img src="images/dh1.jpg" alt="Product Image">
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

        <!-- Total Price -->
        <div class="row mt-4 my-4">
            <div class="col-md-6">
                <div class="cart-total">
                    Tổng Cộng: <span id="total-price">3,700,000 VND</span>
                </div>
            </div>
            <div class="col-md-6 text-end">
                <!-- Nút Thanh Toán -->
                <a href="thongtindathang.php" class="btn btn-primary btn-checkout">Thanh Toán</a>

            </div>
        </div>
    </div>

<!-- info section -->
<?php include "views\info.php" ?>
<!-- end info_section -->

<!-- footer section -->
<?php include "views/footer.php" ?>
<!-- footer section -->