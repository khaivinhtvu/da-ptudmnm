<?php include("../views/header.php");
if (!isset($_SESSION["user"]))
{
    echo ("<script language=javascript>
            alert('Bạn không có quyền trên trang này!'); 
            window.location='../index.php';
            </script>");
} else {
?>
<?php
    $huy = $_POST["idgiohang"];
    include("../ketnoi/ketnoi.php");
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