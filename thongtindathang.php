<!-- header section strats -->
<?php include "views/header.php";
if (!isset($_SESSION["user"])) {
    echo "<script language=javascript>
    alert('Bạn không có quyền trên trang này!'); window.location='index.php';
</script>";
} ?>
<!-- end header section -->

<div class="container my-5">

    <?php
    if (isset($_POST["sbmmua"])) {
        $tdn = $_SESSION["user"];
        $idgiohang = $_POST["idgiohang"];
        include("ketnoi/ketnoi.php");

        $sql = "SELECT * FROM giohang WHERE id='" . $idgiohang . "'";
        $kq = mysqli_query($kn, $sql);

        $sql1 = "SELECT * FROM thanhvien WHERE Tendangnhap = '" . $tdn . "'";
        $kq1 = mysqli_query($kn, $sql1);
        $row1 = mysqli_fetch_array($kq1);

        while ($row = mysqli_fetch_array($kq)) {

            $sql2 = "select * from chitietgio a, sanpham c where a.masp = c.masp and matv='" . $row1["MaTV"] . "' and a.idgiohang='" . $row["id"] . "'";
            $kq2 = mysqli_query($kn, $sql2);
            $tonggia = 0;

            if (mysqli_num_rows($kq2) > 0) {
                echo ("<h5 class='text-left mb-4'>Mã giỏ Hàng: " . $row["id"] . "</h2>
                            <h5 class='text-left mb-4'>Ngày tạo: " . $row["thoigian"] . "</h2>");

                while ($row2 = mysqli_fetch_array($kq2)) {
                    $tonggia = $tonggia + $row2["gia"] * $row2["soluongmua"];
                    echo ("<div class='cart-item row'>
                            <div class='col-md-2'>
                            <img height='175' with='175' src='" . $row2["hinh"] . "' alt='Product Image'>
                            </div>
                            <div class='col-md-6'>
                            <div class='cart-item-name'><h6 class='text-left mb-4'>Tên sản phẩm: " . $row2["tensp"] . "</h2></div>
                            <div class='cart-item-price'><h6 class='text-left mb-4'>Giá từng sản phẩm: " . $row2["gia"] . "</h2></div>
                            </div>
                            <div class='col-md-2'>
                            <h6 class='text-left mb-4'>Số lượng mua: </h2>
                            <input type='number' readonly class='form-control' value='" . $row2["soluongmua"] . "'>
                            </div>
                            <div class='col-md-2 text-center'>
                            </div>
                            </div>");
                }
                echo ("<div class='row mt-4 my-4'>
                        <div class='col-md-6'>
                        <div class='cart-total'>
                        Tổng Cộng: <span id='total-price'>" . $tonggia . "</span>
                        </div>
                        </div>
                        <div class='col-md-6 text-end'>
                        </div>
                        </div>");
            }
        }
        echo ("<form action='giohang/xacnhan.php' method='POST'>
    <div class='mt-5'>
        <h2 class='section-title'>Xác nhận thanh toán</h2>
            <div class='mb-3'>
                <label class='form-label'>Nhập mật khẩu của bạn để xác nhận</label>
                <input type='password' class='form-control' id='matkhau' name='matkhau' required>
            </div>
    </div>

    <div class='mt-5'>
        <h2 class='section-title'>Phương Thức Thanh Toán</h2>
        <div class='form-check'>
            <input class='form-check-input' type='radio' name='htthanhtoan' id='creditCard' value='0' checked>
            <label class='form-check-label' for='creditCard'>
                Thanh toán qua thẻ tín dụng
            </label>
        </div>
        <div class='form-check'>
            <input class='form-check-input' type='radio' name='htthanhtoan' id='cashOnDelivery' value='1'>
            <label class='form-check-label' for='cashOnDelivery'>
                Thanh toán khi nhận hàng
            </label>
        </div>
    </div>

    <div class='mt-5 text-center'>
        <input type='hidden' id='idgiohang' name='idgiohang' value='" . $idgiohang . "'>
        <button type='submit' class='btn btn-primary btn-checkout'>Xác Nhận</button>
    </div>
    </form>");
    }
    ?>
</div>

<!-- info section -->
<?php include "views\info.php" ?>
<!-- end info_section -->

<!-- footer section -->
<?php include "views/footer.php" ?>
<!-- footer section -->