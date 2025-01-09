<?php include "views/header.php";
if (!isset($_SESSION["user"])) {
    echo "<script language=javascript>
    alert('Bạn không có quyền trên trang này!'); window.location='index.php';
</script>";
} ?>

<div class="container mt-4">
    <?php
    $tdn = $_SESSION["user"];
    $id = $_POST["mahoadon"];
    include("ketnoi/ketnoi.php");
    $sql1 = "select * from hoadon where mahoadon = '" . $id . "'";
    $kq1 = mysqli_query($kn, $sql1);
    while ($row1 = mysqli_fetch_array($kq1)) {
        $sql2 = "select * from chitietgio a, thanhvien b, sanpham c where a.masp = c.masp and a.matv = b.MaTV and b.Tendangnhap = '" . $tdn . "' and a.idgiohang= '" . $row1["idgiohang"] . "'";
        $kq2 = mysqli_query($kn, $sql2);
        if (mysqli_num_rows($kq2) > 0) {
            $idgio = $row1["idgiohang"];
            $sql3 = "select * from chitietgio a, thanhvien b, sanpham c where a.masp = c.masp and a.matv = b.MaTV and a.idgiohang= '" . $idgio . "'";
            $kq3 = mysqli_query($kn, $sql3);
            $row3 = mysqli_fetch_array($kq3);

            $sql4 = "select * from giohang where id= '" . $idgio . "'";
            $kq4 = mysqli_query($kn, $sql4);
            $row4 = mysqli_fetch_array($kq4);

            $sql5 = "select * from quantrivien where tendnqtv= '" . $row4["admin"] . "'";
            $kq5 = mysqli_query($kn, $sql5);
            $row5 = mysqli_fetch_array($kq5);

            echo ("
            <div class='container invoice-container'>
            <div id='hoadon'>
            <div class='invoice-header text-center'>
            <h3>Hóa Đơn Mua Hàng</h3>
            <p>Shop Đồng Hồ - Cửa hàng trực tuyến</p>
            </div>

            <div class='row mb-4'>
            <div class='col-md-6'>
                <h4>Thông Tin Khách Hàng</h4>
                <p><strong>Mã thành viên:</strong> " . $row3["MaTV"] . " </p>
                <p><strong>Tên:</strong> " . $row3["Hoten"] . " </p>
                <p><strong>Email:</strong> " . $row3["Email"] . " </p>
                <p><strong>Số điện thoại:</strong> " . $row3["Sdt"] . " </p>
                <p><strong>Địa chỉ:</strong> " . $row3["Diachi"] . " </p>
            </div>
            <div class='col-md-6'>
                <h4>Thông Tin Hoá đơn</h4>
                <p><strong>Mã hoá đơn:</strong> " . $row1["mahoadon"] . "</p>
                <p><strong>Mã giỏ hàng:</strong> " . $row1["idgiohang"] . "</p>
                <p><strong>Ngày tạo giỏ hàng:</strong>  " . $row4["thoigian"] . "</p>
                <p><strong>Ngày lập hoá đơn:</strong> " . $row1["ngaylap"] . "</p>
            </div>
            </div>");
            echo ("<div class='invoice-table'>
            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng mua</th>
                        <th>Thành tiền (VNĐ)</th>
                    </tr>
                </thead>
                <tbody>");

                $tong = 0;
                while ($row2 = mysqli_fetch_array($kq2)) {
                $tong = $tong + ($row2["soluongmua"] * $row2["gia"]);
                echo ("<tr>
                              <td>" . $row2["tensp"] . "</td>
                              <td>" . $row2["gia"] . " VNĐ</td>
                              <td>" . $row2["soluongmua"] . "</td>
                              <td align='right'>" . $row2["soluongmua"] * $row2["gia"] . " VNĐ</td>
                        </tr>");
                }
                echo ("<tr>
                            <td colspan='3' align='right'><b>Tổng tiền</b></td>
                            <td colspan='3' align='right'><b>" . $tong . " VNĐ</b></td>
                    </tr>");
                echo("
                </tbody>
                </table>
                </div>
                </div>");

            echo ("<div class='text-center'>
            <button class='btn btn-primary btn-checkout' onclick='printDiv()'>In Hóa Đơn</button>
            </div> 
            </div>");    
        }
    }
    ?>
</div>
<br>

<script>
        function printDiv() {
            let divContents = document.getElementById("hoadon").innerHTML;
            let printWindow = window.open('', '', 'height=500, width=1000');
            printWindow.document.open();
            printWindow.document.write(`
                <html>
                <head>
                    <title>Hoá đơn điện tử</title>
                    <style>
                        body { font-family: Arial, sans-serif; }
                        table { width: 100%; border-collapse: collapse; }
                        th, td { border: 1px solid #ddd; padding: 8px; }
                        th { background-color: #f4f4f4; }
                    </style>
                </head>
                <body>
                    ${divContents}
                </body>
                </html>
            `);
            printWindow.document.close();
            printWindow.print();
        }
</script>

<!-- info section -->
<?php include "views/info.php" ?>
<!-- end info_section -->

<!-- footer section -->
<?php include "views/footer.php" ?>
<!-- footer section -->