<?php include "../admin/headeradmin.php";
if (!isset($_SESSION["qtri"])) {
    echo "<script language=javascript>
alert('Bạn không có quyền trên trang này!'); window.location='../index.php';
</script>";
} ?>    
<div class="container my-4">
    <h1 class="text-center text-primary">Nhập thông tin sản phẩm</h1>

    <form class='my-4 fw-bold' id="addSanPhamForm" enctype='multipart/form-data'>
        <div class='mb-3'>
            <label class='form-label'><i class='bi bi-hash'></i> Mã sản phẩm</label>
            <input type="text" id="newMasp" class='form-control' placeholder="Mã sản phẩm" required>
        </div>
        <div class='mb-3'>
            <label class='form-label'> <i class='bi bi-tag-fill text-dark'></i>Tên sản phẩm</label>
            <input type="text" id="newTensp" class='form-control' placeholder="Tên sản phẩm" required>
        </div>
        <div class='mb-3'>
            <label class='form-label'><i class='bi bi-camera-fill text-dark'></i> Hình ảnh</label>
            <input type="text" id="newHinh" class='form-control' placeholder="Hình ảnh" required>
        </div>
        <div class='mb-3'>
            <label class='form-label'><i class='bi bi-currency-dollar'></i> Giá</label>
            <input type="text" id="newGia" class='form-control' placeholder="Giá" required>
        </div>
        <div class='mb-3'>
            <label class='form-label'><i class='bi bi-pencil-square text-dark'></i> Mô tả</label>
            <input type="text" id="newMota" class='form-control' placeholder="Mô tả sản phẩm" required>
        </div>
        <div class='mb-3'>
            <label class='form-label'><i class='bi bi-tags-fill text-dark'></i> Giá khuyến mãi</label>
            <input type="text" id="newGiakm" class='form-control' placeholder="Giá khuyến mãi" required>
        </div>
        <div class='mb-3'>
            <label class='form-label'><i class='bi bi-tags-fill text-dark'></i> Số lượng</label>
            <input type="number" id="newSoluong" class='form-control' placeholder="" required>
        </div>
        <button type="submit" class='btn btn-success'><i class="bi bi-plus-circle"></i> Thêm sản phẩm</button>
    </form>
</div>
<script>
    $(document).ready(function() {
        $("#addSanPhamForm").submit(function(event) {
            var masp = $('#newMasp').val();
            var tensp = $('#newTensp').val();
            var hinh = $('#newHinh').val();
            var gia = $('#newGia').val();
            var mota = $('#newMota').val();
            var gia_km = $('#newGiakm').val();
            var soluong = $('#newSoluong').val();
            $.ajax({
                url: "http://localhost/webbandongho/api/sanphamapi.php",
                type: "POST",
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
                    alert("Thêm sản phẩm thành công");
                    window.location.href =
                        "../admin/sanphamadmin.php";
                }
            });
        });
    });
</script>
<?php include "../admin/infoadmin.php" ?>
<?php include "../admin/footeradmin.php" ?>