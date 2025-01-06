<?php include("../admin/headeradmin.php");
if (!isset($_SESSION["qtri"])) {
    echo ("<script language=javascript>
            alert('Bạn không có quyền trên trang này!'); 
            window.location='../index.php';
            </script>");
} ?>
<div class="container mt-4">
    <h1 class="mb-4 text-center text-primary">Danh sách các giỏ hàng</h1>
    <?php
    include("../ketnoi/ketnoi.php");
    $sql1 = "select * from giohang";
    $kq1 = mysqli_query($kn, $sql1);
    echo ("<table class='my-4 table table-bordered'>");
    while ($row1 = mysqli_fetch_array($kq1)) {
        if ($row1["trangthai"] == 0) {
            $sql2 = "select * from chitietgio a, thanhvien b, sanpham c where a.masp = c.masp and a.matv = b.MaTV and a.idgiohang= '" . $row1["id"] . "'";
            $kq2 = mysqli_query($kn, $sql2);
            if (mysqli_num_rows($kq2) > 0) {
                $idgio = $row1["id"];
                $sql3 = "select * from chitietgio a, thanhvien b, sanpham c where a.masp = c.masp and a.matv = b.MaTV and a.idgiohang= '" . $row1["id"] . "'";
                $kq3 = mysqli_query($kn, $sql3);
                $row3 = mysqli_fetch_array($kq3);
                echo("<tr>
                <td>Tên khách hàng: " . $row3["Hoten"] . "</td>
                <td>Mã khách hàng: " . $row3["MaTV"] . "</td>
                </tr>");
                echo ("<tr>
                        <td>Thời gian tạo: " . $row1["thoigian"] . "</td>
                        <td>Mã giỏ hàng: " . $row1["id"] . "</td>
                        <td>Trạng thái giỏ hàng: 0 - Đang mua</td>
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
            }
        }else if ($row1["trangthai"] == 1) {
            echo ("<form name='frmDSDuyet' action='../admin/duyetgiohang.php' method='POST'>");
            $sql2 = "select * from chitietgio a, thanhvien b, sanpham c where a.masp = c.masp and a.matv = b.MaTV and a.idgiohang= '" . $row1["id"] . "'";
            $kq2 = mysqli_query($kn, $sql2);
            if (mysqli_num_rows($kq2) > 0) {
                $idgio = $row1["id"];
                $sql3 = "select * from chitietgio a, thanhvien b, sanpham c where a.masp = c.masp and a.matv = b.MaTV and a.idgiohang= '" . $row1["id"] . "'";
                $kq3 = mysqli_query($kn, $sql3);
                $row3 = mysqli_fetch_array($kq3);
                echo("<tr>
                <td>Tên khách hàng: " . $row3["Hoten"] . "</td>
                <td>Mã khách hàng: " . $row3["MaTV"] . "</td>
                </tr>");
                echo ("<tr>
                        <td>Thời gian tạo: " . $row1["thoigian"] . "</td>
                        <td>Mã giỏ hàng: " . $row1["id"] . "</td>
                        <td>Trạng thái giỏ hàng: 1 - Đang chờ duyệt</td>
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
                            <input type='hidden' id='idgiohang' name='idgiohang' value='" . $idgio . "'>
                            <input type='hidden' id='tongtien' name='tongtien' value='" . $tong . "'>
                            <td colspan='3' align='right'><button type='submit' class='btn btn-primary btn-checkout'>Duyệt giỏ hàng ".$idgio."</button></td>
                    </tr>");
            }
            echo ("</form>");
        } else if($row1["trangthai"] == 2){
                $sql2 = "select * from chitietgio a, thanhvien b, sanpham c where a.masp = c.masp and a.matv = b.MaTV and a.idgiohang= '" . $row1["id"] . "'";
            $kq2 = mysqli_query($kn, $sql2);
            if (mysqli_num_rows($kq2) > 0) {
                $idgio = $row1["id"];
                $sql3 = "select * from chitietgio a, thanhvien b, sanpham c where a.masp = c.masp and a.matv = b.MaTV and a.idgiohang= '" . $row1["id"] . "'";
                $kq3 = mysqli_query($kn, $sql3);
                $row3 = mysqli_fetch_array($kq3);
                echo("<tr>
                <td>Tên khách hàng: " . $row3["Hoten"] . "</td>
                <td>Mã khách hàng: " . $row3["MaTV"] . "</td>
                </tr>");
                echo ("<tr>
                        <td>Thời gian tạo: " . $row1["thoigian"] . "</td>
                        <td>Mã giỏ hàng: " . $row1["id"] . "</td>
                        <td>Trạng thái giỏ hàng: 2 - Đã duyệt</td>
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
            }
        }
    }
    echo ("</table>");
    ?>
</div>
<?php include "../admin/infoadmin.php" ?>
<?php include "../admin/footeradmin.php" ?>