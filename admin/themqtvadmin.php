<?php include "../admin/headeradmin.php";
if (!isset($_SESSION["qtri"])) {
    echo "<script language=javascript>
alert('Bạn không có quyền trên trang này!'); window.location='../index.php';
</script>";
} ?>
<div class="container my-4">
    <h1 class="text-center text-primary">Nhập Thông Tin Quản Trị Viên</h1>

    <form class='my-4 fw-bold' action="../admin/thuchienthemqtv.php" name="addSanPhamForm" id="addSanPhamForm"
        method="post" enctype='multipart/form-data'>
        <div class='mb-3'>
            <label class='form-label'><i class='bi bi-hash'></i> Mã Quản Trị Viên</label>
            <input type="text" id="newId" name="newId" class='form-control' placeholder="Mã sản phẩm" required>
        </div>
        <div class='mb-3'>
            <label class='form-label'>Tên Đăng nhập Của Quản Trị Viên</label>
            <input type="text" id="newTendn" name="newTendn" class='form-control' placeholder="Tên Đăng Nhập" required>
        </div>
        <div class='mb-3'>
            <label class='form-label'>Họ Tên Của Quản Trị Viên</label>
            <input type="text" id="newTen" name="newTen" class='form-control' placeholder="Họ tên của Quản Trị Viên"
                required>
        </div>
        <div class='mb-3'>
            <label class='form-label'>Địa Chỉ Của Quản Trị Viên</label>
            <input type='text' name='newDiachi' id='newDiachi' class='form-control' placeholder="Địa chỉ" required>
        </div>
        <div class='mb-3'>
            <label class='form-label'>Điện Thoại Của Quản Trị Viên</label>
            <input type='number' name='newDienthoai' id='newDienthoai' class='form-control' placeholder='Số điện thoại'
                required>
        </div>
        <div class='mb-3'>
            <label class='form-label'>Mật khẩu Của Quản Trị Viên</label>
            <input type='text' name='newMK' id='newMK' class='form-control' required>
        </div>
        <button type="submit" class='btn btn-success'><i class="bi bi-plus-circle"></i>Thêm</button>
        <button type="reset" class='btn btn-success'>Làm lại</button>
    </form>
</div>
<?php include "../admin/infoadmin.php" ?>
<?php include "../admin/footeradmin.php" ?>