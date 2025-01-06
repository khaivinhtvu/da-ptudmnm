<!-- header section strats -->
<?php include "views/header.php";
if (!isset($_SESSION["user"])) {
    echo "<script language=javascript>
    alert('Bạn không có quyền trên trang này!'); window.location='index.php';
</script>";
} ?>
<!-- end header section -->

<div class="container mt-4 cart-container">
    <h1 class="mb-4 text-center text-primary">Giỏ Hàng Của Bạn</h1>
    <?php
    $tdn = $_SESSION["user"];
    $idgiohang = $_SESSION["user_giohang"];
    include("ketnoi/ketnoi.php");

    $sql = "SELECT * FROM giohang WHERE trangthai = '0'";
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
                            <table>
                            <tr data-id='" . $row2["idchitiet"] . "'>
                            <td>
                            <button class='deleteBtn btn btn-danger'>Xóa</button>
                            </td>
                            </tr>
                            </table>
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
                        <form action='giohang/huygiohang.php' method='post'>
                        <input type='hidden' name='idgiohang' class='form-control' value='" . $row["id"] . "'>
                        <button type='submit' class='btn btn-danger'>Huỷ giỏ hàng</button>
                        </form>
                        <form action='thongtindathang.php' method='post'>
                        <input type='hidden' name='idgiohang' class='form-control' value='" . $row["id"] . "'>
                        <button name='sbmmua' type='submit' class='btn btn-primary btn-checkout'>Thanh Toán</button>
                        </form>
                        </div>
                        </div>");
        }
    }
    ?>
</div>

<script>
$(document).ready(function() {
    $(document).on('click', '.deleteBtn', function() {
        var row = $(this).closest('tr');
        var idchitiet = row.data('id');
        $.ajax({
                url: "http://localhost/webbandongho/api/chitietgiohangapi.php",
                type: "DELETE",
                contentType: "application/json",
                data: JSON.stringify({
                    idchitiet: idchitiet
                }),
                success: function() {
                    alert("Xoá sản phẩm thành công");
                    location.reload();
                }
            });
    });
});
</script>

<!-- info section -->
<?php include "views/info.php" ?>
<!-- end info_section -->

<!-- footer section -->
<?php include "views/footer.php" ?>
<!-- footer section -->