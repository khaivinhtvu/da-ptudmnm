<?php session_start();
if (!isset($_SESSION["qtri"])) {
    echo ("<script language=javascript>
            alert('Bạn không có quyền trên trang này!'); 
            window.location='../index.php';
            </script>");
} ?>

<?php
include("../ketnoi/ketnoi.php");
$id = $_POST["newId"];
$tdn = $_POST["newTendn"];
$t = $_POST["newTen"];
$dc = $_POST["newDiachi"];
$sdt = $_POST["newDienthoai"];
$mk = md5($_POST["newMK"]);
$sql1 = "INSERT INTO quantrivien (id, tendnqtv, tenqtv, matkhauqtv, diachiqtv, dtqtv) VALUES ('$id', '$tdn', '$t', '$mk', '$dc', '$sdt')";
$kq1 = mysqli_query($kn, $sql1);
echo ("<script language=javascript>
    alert('Thêm thông tin thành công'); window.location='../admin/qtvadmin.php';
    </script> ");
?>