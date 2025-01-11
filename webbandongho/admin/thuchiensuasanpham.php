<?php session_start();
if (!isset($_SESSION["qtri"])) {
    echo ("<script language=javascript>
            alert('Bạn không có quyền trên trang này!'); 
            window.location='../index.php';
            </script>");
} ?>

<?php 
include("../ketnoi/ketnoi.php");
$id = $_POST["Masp"];
$tsp = $_POST["newTensp"];
$mt = $_POST["newMota"];
$g = $_POST["newGia"];
$sl = $_POST["newSoluong"];
$gkm = $_POST["newGiakm"];

if ($_FILES['newHinh']['name'] != "") {
    $duongdan = "images/";
    $duongdan = $duongdan . basename($_FILES['newHinh']['name']);
    $file_tam = $_FILES['newHinh']['tmp_name'];
    move_uploaded_file($file_tam, $duongdan);
    $sql1 = "UPDATE sanpham SET tensp='$tsp', hinh='$duongdan', gia='$g', mota='$mt', gia_km='$gkm', soluong='$sl' WHERE masp='$id'";
    $kq1 = mysqli_query($kn, $sql1);
    echo ("<script language=javascript>
    alert('Sửa sản phẩm thành công '); window.location='../admin/sanphamadmin.php';
    </script> ");
}else{
    $hc=$_POST["hinhcu"];
    $sql1 = "UPDATE sanpham SET tensp='$tsp', hinh='$hc', gia='$g', mota='$mt', gia_km='$gkm', soluong='$sl' WHERE masp='$id'";
    $kq1 = mysqli_query($kn, $sql1);
    echo ("<script language=javascript>
    alert('Sửa sản phẩm thành công '); window.location='../admin/sanphamadmin.php';
    </script> ");
}
?>