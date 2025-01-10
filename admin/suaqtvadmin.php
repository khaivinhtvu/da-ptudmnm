<?php include "../admin/headeradmin.php";
if (!isset($_SESSION["qtri"])) {
    echo "<script language=javascript>
alert('Bạn không có quyền trên trang này!'); window.location='../index.php';
</script>";
}  ?>

<div class="container my-4">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <h1 class="text-center text-primary">Sửa Thông Tin Quản Trị Viên</h1>


    <?php
    if (isset($_POST["editBtn"])) {
        $id = $_POST["qtvId"];
        include("../ketnoi/ketnoi.php");

        if (!$kn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        }

        $sql1 = "select * from quantrivien where id = '" . $id . "'";
        $kq1 = mysqli_query($kn, $sql1);

        if (mysqli_num_rows($kq1) == 1) {
            $row = mysqli_fetch_array($kq1);
            echo ("<form class='fw-bold my-4' action='../admin/thuchiensuaqtv.php' name='updateqtvForm' id='updateqtvForm' method='post' enctype='multipart/form-data'>
                        <div class='mb-3'>
                            <label class='form-label'><i class='bi bi-hash'></i> Mã Quản Trị Viên</label>
                            <input type='text' name='Id' id='Id' class='form-control' readonly value='" . $row["id"] . "'>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'><i class='bi bi-person'></i> Tên Đăng nhập của Quản Trị Viên</label>
                            <input type='text' name='newTendn' id='newTendn' class='form-control' value='" . $row["tendnqtv"] . "' required>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'><i class='bi bi-person-badge'></i> Họ và tên của Quản Trị Viên</label>
                            <input type='text' name='newTen' id='newTen' class='form-control' value='" . $row["tenqtv"] . "' required>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'><i class='bi bi-geo-alt'></i> Địa chỉ của Quản Trị Viên</label>
                            <input type='text' name='newDiachi' id='newDiachi' class='form-control' value='" . $row["diachiqtv"] . "' required>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'><i class='bi bi-telephone'></i> Điện thoại của Quản Trị Viên</label>
                            <input type='number' name='newDienthoai' id='newDienthoai' class='form-control' value='" . $row["dtqtv"] . "' required>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'><i class='bi bi-lock'></i> Mật khẩu của Quản Trị Viên</label>
                            <input type='password' name='newMK' id='newMK' class='form-control' value='" . $row["matkhauqtv"] . "' required>
                        </div>
                            <button type='submit' class='btn btn-success'><i class='bi bi-save'></i> Cập nhật</button>
                            <button type='reset' class='btn btn-success'>Làm lại</button>
                            </form>");
        } else {
            echo "<script language='javascript'>
                alert('Lỗi không tìm thấy quản trị viên');
                window.location ='index.php';
                </script>";
        }
    }
    ?>
</div>
<?php include "../admin/infoadmin.php" ?>
<?php include "../admin/footeradmin.php" ?>