<?php session_start(); if (!isset($_SESSION["user"])) {
    echo "<script language=javascript>
alert('Bạn không có quyền trên trang này!'); window.location='../index.php';
</script>";
} ?> 

<?php
    $nguoimua=$_SESSION["user"];
    $masp=$_POST["masp"];
    $sluong=$_POST["soluong"];
    include ("../ketnoi/ketnoi.php");

    $sql1="select soluong from sanpham where masp=".$masp;
    $kq1=mysqli_query($kn,$sql1);
    $row1=mysqli_fetch_array($kq1);
    if($row1["soluong"] < $sluong){
        echo("<script language=javascript>
        alert('Không đủ số lượng, số lượng còn là".$row1["soluong"]."'); 
        window.location='index.php';
        </script>");
    }
    else
    {
            $ngay = date("Y-m-d");
            $id = $_SESSION["user_giohang"];
            $soluongcon = $row1["soluong"] - $sluong;

            $sql2 = "SELECT * FROM giohang WHERE id = '".$id."'";
            $kq2 = mysqli_query($kn, $sql2);
            $row = mysqli_fetch_array($kq2);

            if($row != null) {
                $sql5= "select * from thanhvien where Tendangnhap = '".$nguoimua."'";
                $kq5 = mysqli_query($kn, $sql5);
                $row2 = mysqli_fetch_array($kq5);

                $sql6 = "insert into chitietgio (masp, idgiohang, soluongmua, matv) values ('".$masp."',".$id.",".$sluong.",".$row2["MaTV"].")";
                $kq6 = mysqli_query($kn, $sql6);

                //UPDATE `sanpham` SET `masp`='[value-1]',`tensp`='[value-2]',`hinh`='[value-3]',`gia`='[value-4]',`mota`='[value-5]',`gia_km`='[value-6]',`soluong`='[value-7]' WHERE 1
                $sql7 = "update sanpham SET soluong = '".$soluongcon."' where masp = '".$masp."'";
                $kq7 = mysqli_query($kn, $sql7);
            } else {
                $sql4 = "insert into giohang(id, thoigian) values ('".$id."', '".$ngay."')";
                $kq4 = mysqli_query($kn,$sql4);

                $sql5= "select * from thanhvien where Tendangnhap = '".$nguoimua."'";
                $kq5 = mysqli_query($kn, $sql5);
                $row2 = mysqli_fetch_array($kq5);

                $sql6 = "insert into chitietgio (masp, idgiohang, soluongmua, matv) values ('".$masp."',".$id.",".$sluong.",".$row2["MaTV"].")";
                $kq6 = mysqli_query($kn, $sql6);

                $sql7 = "update sanpham SET soluong = '".$soluongcon."' where masp = '".$masp."'";
                $kq7 = mysqli_query($kn, $sql7);
            }

            echo ("<script language=javascript>
            alert('Mua hàng thành công!'); 
            window.location='../giohang.php';
            </script>");
    }
?>