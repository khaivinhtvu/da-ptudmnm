<?php session_start();
if (!isset($_SESSION["qtri"])) {
    echo ("<script language=javascript>
            alert('Bạn không có quyền trên trang này!'); 
            window.location='../index.php';
            </script>");
} ?>

<?php
$xacnhan = $_POST["idgiohang"];
$tongtien = $_POST["tongtien"];
$ngay = date("Y-m-d");
include("../ketnoi/ketnoi.php");
$sql2 = "SELECT * FROM giohang WHERE id='" . $xacnhan . "'";
$kq2 = mysqli_query($kn, $sql2);
$row  = mysqli_fetch_array($kq2);

$sql = "update giohang set trangthai='2', admin='" . $_SESSION["qtri"] . "' where id='" . $xacnhan . "'";
$kq = mysqli_query($kn, $sql);

if ($row["trangthai"] == 10){
    $sql2 = "insert into hoadon (ngaylap, tongtien, idgiohang, hinhthucthanhtoan) values('" . $ngay . "','" . $tongtien . "','" . $xacnhan . "', 'Thẻ tín dụng')";
    $kq2 = mysqli_query($kn, $sql2);
}else if ($row["trangthai"] == 11){
    $sql2 = "insert into hoadon (ngaylap, tongtien, idgiohang, hinhthucthanhtoan) values('" . $ngay . "','" . $tongtien . "','" . $xacnhan . "', 'Khi nhận hàng')";
    $kq2 = mysqli_query($kn, $sql2);
}


echo ("<script language=javascript>
    alert('Cập nhật thành công!'); 
    window.location='../admin/giohangadmin.php';
    </script>");
?>