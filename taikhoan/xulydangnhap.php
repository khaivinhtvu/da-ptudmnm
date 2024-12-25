<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
</head>

<body>
    <?php
    if (isset($_POST["sbmdangnhap"])) {
        $tdn = $_POST["txtuser"];
        $mk = md5($_POST['txtpass']);
        include("../ketnoi/ketnoi.php");

        // Kiểm tra kết nối cơ sở dữ liệu
        if (!$kn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        }

        // Câu lệnh SQL kiểm tra tài khoản
        $sql1 = "SELECT * FROM thanhvien WHERE Tendangnhap = '".$tdn."' AND Matkhau = '".$mk."'";
        $kq1 = mysqli_query($kn, $sql1);

        // Kiểm tra kết quả truy vấn
        if (mysqli_num_rows($kq1)==1) {
            $_SESSION["user"] = $tdn; // Đổi từ `$_session` thành `$_SESSION`
            echo "<script language='javascript'>
                alert('Đăng nhập thành công');
                window.location ='../index.php';
            </script>";
        } else {
            echo "<script language='javascript'>
                alert('Đăng nhập thất bại');
                window.location ='../index.php';
            </script>";
        }
    }
    ?>
</body>

</html>