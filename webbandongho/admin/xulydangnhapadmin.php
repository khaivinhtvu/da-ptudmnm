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
        $tdn = $_POST["username"];
        $mk = md5($_POST['pass']);
        include("../ketnoi/ketnoi.php");

        // Kiểm tra kết nối cơ sở dữ liệu
        if (!$kn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        }

        // Câu lệnh SQL kiểm tra tài khoản
        $sql1 = "SELECT * FROM quantrivien WHERE tendnqtv = '".$tdn."' AND matkhauqtv = '".$mk."'";
        $kq1 = mysqli_query($kn, $sql1);

        // Kiểm tra kết quả truy vấn
        if (mysqli_num_rows($kq1)==1) {
            $_SESSION["qtri"] = $tdn; // Đổi từ `$_session` thành `$_SESSION`
            echo "<script language='javascript'>
                alert('Đăng nhập thành công');
                window.location ='../admin/sanphamadmin.php';
            </script>";
        } else {
            echo "<script language='javascript'>
                alert('Đăng nhập thất bại');
                window.location ='../admin.php ';
            </script>";
        }
    }
    ?>
</body>

</html>