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
$sql = "update giohang set trangthai='2', admin='" . $_SESSION["qtri"] . "' where id='" . $xacnhan . "'";
$kq = mysqli_query($kn, $sql);

$sql2 = "insert into hoadon (ngaylap, tongtien, idgiohang) values('" . $ngay . "','" . $tongtien . "','" . $xacnhan . "')";
$kq2 = mysqli_query($kn, $sql2);

echo ("<script language=javascript>
    alert('Cập nhật thành công!'); 
    window.location='../admin/giohangadmin.php';
    </script>");
?>