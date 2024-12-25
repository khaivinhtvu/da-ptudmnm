<!-- header section strats -->
<?php include "views/header.php" ?>
<!-- end header section -->

<section class="furniture_section layout_padding">
    <div class="container bg-info detail-box">
        <div class="heading_container">
            <h2 class="text-center fw-bold fs-3 my-3 mb-2 text-white">
                Kết quả tìm kiếm:
            </h2>
        </div>
        <div class="row">
            <?php
            if (isset($_POST["sbmTimkiem"])) {
                $tensanpham = $_POST["txtTimkiem"];
                include "ketnoi\ketnoi.php";
                //SELECT * FROM `sanpham` WHERE (tensp LIKE '%A1%') OR (tensp LIKE 'A1%') OR (tensp LIKE '%A1');
                $sql = "SELECT * FROM sanpham WHERE (tensp LIKE '%" . $tensanpham . "%')";
                //echo ("<div><h5>" . $sql . "</h5>");
                $kq = mysqli_query($kn, $sql);
                $test = mysqli_fetch_array($kq);
                if ($test == NULL) {
                    echo ("<h2 class='text-center fw-bold fs-3 my-3 mb-2 text-dark'>
                Không tìm thấy sản phẩm!
                </h2>");
                } else {
                    $kq = mysqli_query($kn, $sql);
                    $i = 0;
                    while ($row = mysqli_fetch_array($kq)) {
                        if ($i % 2 == 0) {
                            echo ("<div class='col-md-6 col-lg-4'>
                        <form action='sanphamchitiet.php' method='post'>
                        <div class='box'>
                        <div class='img-box'>
                        <img src='" . $row["hinh"] . "' alt=''>
                        </div><div class='detail-box'>
                        <h5>
                            " . $row["tensp"] . "
                        </h5>
                        <input type='hidden' name='sanphamId' value='" . $row["masp"] . "'>
                        <div class='price_box'>
                            <h6 class='price_heading'>
                                " . $row["gia"] . "<span> VND</span>
                            </h6>
                            <button type='submit' name='sbmxem' class='btn btn-primary text-white'>Xem</button>
                        </div>
                        </div>
                        </div>
                        </form>
                        </div>");
                        }
                        if ($i % 2 != 0)
                            $i++;
                    }
                }
            }
            ?>
        </div>
    </div>
</section>

<!-- info section -->
<?php include "views/info.php" ?>
<!-- end info_section -->


<!-- footer section -->
<?php include "views/footer.php" ?>
<!-- footer section -->