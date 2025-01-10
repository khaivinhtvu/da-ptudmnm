<?php include "../admin/headeradmin.php";
if (!isset($_SESSION["qtri"])) {
    echo "<script language=javascript>
alert('Bạn không có quyền trên trang này!'); window.location='../index.php';
</script>";
}  ?>

<div class="container my-4">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <h1 class="text-center text-primary">Chỉnh Sửa Sản Phẩm</h1>


    <?php
    if (isset($_POST["editBtn"])) {
        $id = $_POST["sanphamId"];
        include("../ketnoi/ketnoi.php");

        // Kiểm tra kết nối cơ sở dữ liệu
        if (!$kn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        }

        // Câu lệnh SQL kiểm tra san pham
        $sql1 = "select * from sanpham where masp = '" . $id . "'";
        $kq1 = mysqli_query($kn, $sql1);

        // Kiểm tra kết quả truy vấn
        if (mysqli_num_rows($kq1) == 1) {
            $row = mysqli_fetch_array($kq1);
            echo ("<form class='fw-bold my-4' action='../admin/thuchiensuasanpham.php' name='updateSanPhamForm' id='updateSanPhamForm' method='post' enctype='multipart/form-data'>
                        <div class='mb-3'>
                            <label class='form-label'><i class='bi bi-hash'></i> Mã sản phẩm</label>
                            <input type='text' name='Masp' id='Masp' class='form-control' readonly value='" . $row["masp"] . "'>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'> <i class='bi bi-tag-fill text-dark'></i>Tên sản phẩm</label>
                            <input type='text' name='newTensp' id='newTensp' class='form-control' value='" . $row["tensp"] . "' required>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'><i class='bi bi-camera-fill text-dark'></i> Hình ảnh</label>
                            <img src='../" . $row["hinh"] . "'height='100' width='100'><input type='hidden' name='hinhcu' id='hinhcu' value='" . $row["hinh"] . "'><input type='hidden' name='MAX_FILE_SIZE' value='1000000' /> <input name='newHinh' id='newHinh' type='file' class='form-control' value=''>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'><i class='bi bi-currency-dollar'></i> Giá</label>    
                            <input type='text' name='newGia' id='newGia' class='form-control' value='" . $row["gia"] . "' required>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'><i class='bi bi-pencil-square text-dark'></i> Mô tả</label>    
                            <input type='text' name='newMota' id='newMota' class='form-control' value='" . $row["mota"] . "' required>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'><i class='bi bi-tags-fill text-dark'></i> Giá khuyến mãi</label>    
                            <input type='text' name='newGiakm' id='newGiakm' class='form-control'value='" . $row["gia_km"] . "' required>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'><i class='bi bi-tags-fill text-dark'></i> Số lượng sản phẩm</label>    
                            <input type='text' name='newSoluong' id='newSoluong' class='form-control'value='" . $row["soluong"] . "' required>
                        </div>     
                            <button type='submit' class='btn btn-success'><i class='bi bi-save'></i> Cập nhật</button>
                            <button type='reset' class='btn btn-success'>Làm lại</button>
                            </form>");
        } else {
            echo "<script language='javascript'>
                alert('Lỗi không tìm thấy sản phẩm');
                window.location ='index.php';
                </script>";
        }
    }
    ?>
</div>
<script>
$(document).ready(function() {
    $("").submit(function(event) {
        var masp = $('#Masp').val();
        var tensp = $('#newTensp').val();
        var gia = $('#newGia').val();
        var mota = $('#newMota').val();
        var gia_km = $('#newGiakm').val();
        var soluong = $('#newSoluong').val();
        var hinh = $('#newHinh').val();
        $.ajax({
            url: "http://localhost/webbandongho/api/sanphamapi.php",
            type: "PUT",
            contentType: "application/json",
            data: JSON.stringify({
                masp: masp,
                tensp: tensp,
                hinh: hinh,
                gia: gia,
                mota: mota,
                gia_km: gia_km,
                soluong: soluong
            }),
            success: function() {
                alert("Cập nhập sản phẩm thành công");
                window.location.href =
                    "../admin/sanphamadmin.php";
            }
        });
    });
})
</script>
<?php include "../admin/infoadmin.php" ?>
<?php include "../admin/footeradmin.php" ?>