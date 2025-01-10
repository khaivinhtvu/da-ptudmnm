<?php include("../admin/headeradmin.php");
if (!isset($_SESSION["qtri"])) {
        echo ("<script language=javascript>
            alert('Bạn không có quyền trên trang này!'); 
            window.location='../index.php';
            </script>");
} ?>
<div class="container mt-4">
        <h1 class="mb-4 text-center text-primary">Danh sách các hoá đơn</h1>
        <?php
        include("../ketnoi/ketnoi.php");
        $sql1 = "select * from hoadon";
        $kq1 = mysqli_query($kn, $sql1);
        echo ("<table class='my-4 table table-bordered'>");
        while ($row1 = mysqli_fetch_array($kq1)) {
                $sql2 = "select * from chitietgio a, thanhvien b, sanpham c where a.masp = c.masp and a.matv = b.MaTV and a.idgiohang= '" . $row1["idgiohang"] . "'";
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

                        echo ("<tr>
                <td>Mã hoá đơn: " . $row1["mahoadon"] . "</td>
                <td>Mã giỏ hàng: " . $row1["idgiohang"] . "</td>
                <td>Hình thúc thanh toán: " . $row1["hinhthucthanhtoan"] . "</td>
                </tr>");
                        echo ("<tr>
                <td>Tên khách hàng: " . $row3["Hoten"] . "</td>
                <td>Mã khách hàng: " . $row3["MaTV"] . "</td>
                </tr>");
                        echo ("<tr>
                <td>Người lập hoá đơn: " . $row5["tenqtv"] . "</td>
                <td>Ngày tạo giỏ hàng: " . $row4["thoigian"] . "</td>
                <td>Ngày lập hoá đơn: " . $row1["ngaylap"] . "</td>
                </tr>");

                        echo ("<tr bgcolor='#92D84E' align='center'>
                        <td>Tên sản phẩm</td>
                        <td>Đơn giá</td>
                        <td>Số lượng mua</td>
                        <td>Thành tiền (VNĐ)</td>
                        </tr>");
                        $tong = 0;
                        while ($row2 = mysqli_fetch_array($kq2)) {
                                $tong = $tong + ($row2["soluongmua"] * $row2["gia"]);
                                echo ("<tr>
                              <td align='right'>" . $row2["tensp"] . "</td>
                              <td align='right'>" . $row2["gia"] . " VNĐ</td>
                              <td align='right'>" . $row2["soluongmua"] . "</td>
                              <td align='right'>" . $row2["soluongmua"] * $row2["gia"] . " VNĐ</td>
                                </tr>");
                        }
                        echo ("<tr>
                            <td colspan='3' align='right'><b>Tổng tiền</b></td>
                            <td colspan='3' align='right'><b>" . $tong . " VNĐ</b></td>
                                </tr>");
                        echo ("<tr>
                                <form name='frmXemHD' action='../admin/hoadonadmin.php' method='POST'>
                                <input type='hidden' id='mahoadon' name='mahoadon' value='" . $row1["mahoadon"] . "'>
                                <td colspan='3' align='right'><button type='submit' class='btn btn-primary btn-checkout'>Xem chi tiết</button></td>
                                </form>
                         </tr>");
                }
        }
        echo ("</table>");
        ?>
</div>
<?php include "../admin/infoadmin.php" ?>
<?php include "../admin/footeradmin.php" ?>