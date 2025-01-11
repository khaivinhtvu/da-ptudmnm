<?php include("../admin/headeradmin.php");
if (!isset($_SESSION["qtri"])) {
    echo ("<script language=javascript>
            alert('Bạn không có quyền trên trang này!'); 
            window.location='../index.php';
            </script>");
} ?>
<div class="container mt-4">
    <h1 class="mb-4 text-center text-primary">Danh Sách Các Giỏ Hàng</h1>
    <h2 class="mb-4 text-left text-primary">Ghi chú trạng thái:</h2>
    <h5 class="mb-4 text-left">0: Đang mua hàng</h5>
    <h5 class="mb-4 text-left">10: Đang chờ duyệt - Thanh toán bằng thẻ tín dụng</h5>
    <h5 class="mb-4 text-left">11: Đang chờ duyệt - Thanh toán khi nhận hàng</h5>
    <h5 class="mb-4 text-left">2: Đã duyệt</h5>
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
        }else if ($row1["trangthai"] == 10 || $row1["trangthai"] == 11) {
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
                        <td>Trạng thái giỏ hàng: ". $row1["trangthai"] ." - Đang chờ duyệt</td>
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

<style>
/* Bảng */
.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.table th,
.table td {
    border: 1px solid #dddddd;
    padding: 12px;
    text-align: left;
}

.table th {
    background-color: #007bff;
    color: #ffffff;
    font-size: 1rem;
    font-weight: bold;
    text-align: center;
    text-transform: uppercase;
}

.table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.table-hover tbody tr:hover {
    background-color: #e8f5ff;
}

/* Các dòng trạng thái */
tr.bg-success {
    background-color: #92d84e !important;
}

tr.bg-warning {
    background-color: #ffe082 !important;
}

/* Dòng tiêu đề chi tiết sản phẩm */
tr[bgcolor="#92D84E"] {
    background-color: #28a745 !important;
    color: #ffffff;
    font-weight: bold;
    text-align: center;
}

/* Nút "Xem chi tiết" */
.btn-checkout {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-checkout:hover {
    background-color: #0056b3;
}

/* Tổng tiền */
.table td[colspan="3"] {
    border: 1px solid #dddddd;
    padding: 10px;
    text-align: left;

}

/* Căn chỉnh */
.text-end {
    text-align: right;
}

/* Form */
form {
    margin: 0;
    padding: 0;
}

/* Khoảng cách */
.mt-4 {
    margin-top: 1.5rem !important;
}

.mb-4 {
    margin-bottom: 1.5rem !important;
}
</style>