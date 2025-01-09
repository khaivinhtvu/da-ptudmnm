<!-- header section strats -->
<?php include "views\header.php" ?>
<!-- end header section -->

<section class="furniture_section layout_padding">
    <div class="container bg-info detail-box">
        <div class="row">
            <?php
            if (isset($_POST["sbmxem"])) {
                $id = $_POST["sanphamId"];
                include("ketnoi\ketnoi.php");

                // Kiểm tra kết nối cơ sở dữ liệu
                if (!$kn) {
                    die("Kết nối thất bại: " . mysqli_connect_error());
                }

                // Câu lệnh SQL kiểm tra san pham
                $sql1 = "select * from sanpham where masp = '" . $id . "'";
                $kq1 = mysqli_query($kn, $sql1);

                // Kiểm tra kết quả truy vấn
                if (mysqli_num_rows($kq1) == 1) {
                    $row = mysqli_fetch_array($kq1);
                    echo ("<div class=' my-5 col-md-6 col-lg-4'>
                <div class='box'>
                <div class='img-box'>
                <img src='" . $row["hinh"] . "' alt=''>
                </div>
                </div>
                </div>

                <div class='col-md-6 col-lg-4'>
                <div class='box'>
                <div class='detail-box'>
                <h5>
                " . $row["tensp"] . "
                </h5>
                
                </div>
                <h5>
                Mô tả sản phẩm: " . $row["mota"] . "
                </h5>
                </div>
                </div>

                <div class='col-md-6 col-lg-4'>
                <form action='giohang/muahang.php' method='post'>
                <div class='box'>
                <div class='detail-box'>
                <div class='price_box'>
                <h6 class='price_heading'>
                    Số lượng còn: " . $row["soluong"] . "
                </h6>
                </div>
                <div class='price_box'>
                <h6 class='price_heading'>
                    Số lượng mua: 
                </h6>
                <input type='number' id='soluong' name='soluong' min='1' value='1' max='500'>
                </div>
                <div class='price_box'>
                <h6 class='price_heading'>
                    Giá: " . $row["gia"] . "<span> VND</span>
                </h6>
                </div>
                <input type='hidden' id='masp' name='masp' value = '".$row["masp"]."'>
                <button type='submit' name='sbmthemvaogio' class='btn btn-primary text-white'>Thêm vào giỏ hàng</button>
                </div>
                </div>
                </form>
                </div>" );
                } else {
                    echo "<script language='javascript'>
                alert('Lỗi không tìm thấy sản phẩm');
                window.location ='index.php';
                </script>";
                }
            }
            ?>
        </div>
    </div>
</section>

<!-- info section -->
<?php include "views\info.php" ?>
<!-- end info_section -->


<!-- footer section -->
<?php include "views/footer.php" ?>
<!-- footer section -->