<?php include "../admin/headeradmin.php"; if (!isset($_SESSION["qtri"])) {
    echo "<script language=javascript>
alert('Bạn không có quyền trên trang này!'); window.location='../index.php';
</script>";
}   ?>

<div class="container mt-4">
    <h1 class="mb-4 text-center text-primary">Danh sách sản phẩm</h1>

    <a href="../admin/themsanphamadmin.php">
        <button class="btn btn-primary mb-3">Thêm Sản Phẩm</button>
    </a>

    <table class="my-4 table table-bordered" id="sanphamTable">
        <thead class="thead-dark">
            <tr>
                <th>Mã Sản Phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>Hình</th>
                <th>Giá</th>
                <th>Mô Tả</th>
                <th>Giá Khuyến Mãi</th>
                <th>Số lượng</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
<script>
$(document).ready(function() {
    function loadSanPham() {
        $.get("http://localhost/webbandongho/api/sanphamapi.php", function(data) {
            $('#sanphamTable tbody').empty();
            data.forEach(function(sp) {
                var row = "<tr data-id='" + sp.masp + "'>" +
                    "<td>" + sp.masp + "</td>" +
                    "<td>" + sp.tensp + "</td>" +
                    "<td> <img src='../" + sp.hinh +
                    "' class='img-fluid' style='max-width: 100px;'></td>" +
                    "<td>" + sp.gia + " VND </td>" +
                    "<td>" + sp.mota + "</td>" +
                    "<td>" + sp.gia_km + " VND </td>" +
                    "<td>" + sp.soluong + "</td>" +
                    "<td><form action='../admin/suasanphamadmin.php' method='post' class='d-inline'><input type='hidden' name='sanphamId' value='" +
                    sp.masp +
                    "'><button name='editBtn' class='btn btn-warning btn-sm'>Chỉnh Sửa</button></form> <button class='deleteBtn btn btn-danger btn-sm'>Delete</button></td>" +
                    "</tr>";
                $('#sanphamTable tbody').append(row);
            });
        });
    }

    loadSanPham();

    $(document).on('click', '.deleteBtn', function() {
        var row = $(this).closest('tr');
        var masp = row.data('id');
        $.ajax({
            url: "http://localhost/webbandongho/api/sanphamapi.php",
            type: "DELETE",
            contentType: "application/json",
            data: JSON.stringify({
                masp: masp
            }),
            success: function() {
                loadSanPham();
            }
        });
    });
});
</script>

<?php include "../admin/infoadmin.php" ?>

<?php include "../admin/footeradmin.php" ?>