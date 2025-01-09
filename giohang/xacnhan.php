<?php session_start();
if (!isset($_SESSION["user"])) {
    echo "<script language=javascript>
alert('Bạn không có quyền trên trang này!'); window.location='../index.php';
</script>";
} ?> 

<?php
    $tdn = $_SESSION["user"];
    $mk = md5($_POST['matkhau']);
    $idgiohang = $_POST['idgiohang'];
    include("../ketnoi/ketnoi.php");

    $sql1 = "SELECT * FROM thanhvien WHERE Tendangnhap = '".$tdn."' AND Matkhau = '".$mk."'";
    $kq1 = mysqli_query($kn, $sql1);

    if (mysqli_num_rows($kq1)==1) {
        $sql7 = "update giohang SET trangthai = '1' where id = '".$idgiohang."'";
        $kq7 = mysqli_query($kn, $sql7);
        
        echo "<script language='javascript'>
            alert('Xác nhận thành công');
            window.location ='../giohang.php';
        </script>";
    } else {
        echo "<script language='javascript'>
            alert('Xác nhận thất bại, kiểm tra lại mật khẩu của bạn');
            window.location ='../giohang.php';
        </script>";
    }
?>