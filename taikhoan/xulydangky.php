<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
</head>

<body>
    <?php
        include ("../ketnoi/ketnoi.php");
        $tdn = $_POST["txtTDNhap"];
        $mk = md5($_POST['pswMKhau']);
        $ht = $_POST["hoten"];
        $email = $_POST["email"];
        $dc = $_POST["diachi"];
        $sdt = $_POST["sdt"];

        //INSERT INTO `thanhvien` (`MaTV`, `Tendangnhap`, `Matkhau`, `Hoten`, `Email`, `Diachi`, `Sdt`) VALUES
        
        // Kiểm tra
        $sql1 = "SELECT * FROM thanhvien WHERE Tendangnhap = '".$tdn."'";
        $kq1 = mysqli_query($kn, $sql1);
        if(mysqli_fetch_array($kq1)){
            echo "<script language='javascript'>
            alert('Đã có tên đăng nhập này. Bạn hãy chọn tên đăng nhập khác!');
            window.location ='dangky.php';
        </script>";
        } 
        else {
            $sql1 = "SELECT * FROM thanhvien WHERE Email = '".$email."'";
            $kq1 = mysqli_query($kn, $sql1);
            if(mysqli_fetch_array($kq1)){
                echo "<script language='javascript'>
                alert('Chỉ được đămg ký email cho duy nhất môt tài khoản!');
                window.location ='dangky.php';
                </script>";
            } else {
                $id = random_int(0, 100000);
                $sql2 = "SELECT * FROM thanhvien WHERE MaTV = '".$id."'";
                $kq2 = mysqli_query($kn, $sql2);

                while(mysqli_fetch_array($kq2)){$id = random_int(0, 100000); $kq2 = mysqli_query($kn, $sql2);}

                $sql2="insert into thanhvien values('".$id."','".$tdn."','".$mk."','".$ht."','".$email."','".$dc."','".$sdt."')";
                $kq2=mysqli_query($kn, $sql2);
                $_SESSION["user"]=$tdn;
                echo ("<script language='javascript'>
                alert('Đăng ký thành công');
                window.location ='../index.php';
                </script>");
            } }
    ?>

</body>

</html>