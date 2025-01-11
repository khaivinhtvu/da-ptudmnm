<?php include("../views/header.php");
if (!isset($_SESSION["user"])) {
    echo ("<script language=javascript>
            alert('Bạn không có quyền trên trang này!'); 
            window.location='../index.php';
            </script>");
} else {
?>
<?php
    $huy = $_POST["idgiohang"];
    include("../ketnoi/ketnoi.php");

    $sql1 = "SELECT * FROM chitietgio WHERE idgiohang = '" . $huy . "'";
    $result1 = mysqli_query($kn, $sql1);

    while ($row = mysqli_fetch_array($result1)) {
        $masp = $row["masp"];
        $soluong = $row["soluongmua"];
        $sql2 = "SELECT * FROM sanpham WHERE masp = '" . $masp . "'";
        $result2 = mysqli_query($kn, $sql2);
        $row2 = mysqli_fetch_array($result2);
        $soluong2 = $row2["soluong"];
        $soluongcon = $soluong + $soluong2;
        $sql7 = "update sanpham SET soluong = '".$soluongcon."' where masp = '".$masp."'";
        $kq7 = mysqli_query($kn, $sql7);
    }

    $sql = "delete from chitietgio where idgiohang='" . $huy . "'";
    $kq = mysqli_query($kn, $sql);
    $sql1 = "delete from giohang where id='" . $huy . "'";
    $kq1 = mysqli_query($kn, $sql1);

    echo ("<script language=javascript>
        alert('Đã xóa giỏ hàng thành công!'); 
        window.location='../giohang.php';
        </script>");
}
include("../footer.php");
?>