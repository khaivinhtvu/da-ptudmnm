<section class="furniture_section layout_padding">
    <div class="container bg-info detail-box">
        <div class="heading_container">
            <h2 class="text-center fs-2 my-3 mb-2 text-primary">
                Sản Phẩm Đồng Hồ
            </h2>
        </div>
        <div class="row">
            <?php
            include "ketnoi\ketnoi.php";
            $sql = "select * from sanpham";
            $kq = mysqli_query($kn, $sql);
            $i = 0;
            while ($row = mysqli_fetch_array($kq)) {
                if ($i % 2 == 0) {
                    echo ("<div class=' my-5 col-md-6 col-lg-4'>
                        <form action='sanphamchitiet.php' method='post'>
                        <div class='box'>
                        <div class='img-box'>
                        <img src='" . $row["hinh"] . "' alt=''>
                        </div><div class='detail-box'>
                        <h5>
                            " . $row["tensp"] . "
                        </h5>
                        <input type='hidden' name='sanphamId' value='".$row["masp"]."'>
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
            ?>
        </div>
    </div>
</section>