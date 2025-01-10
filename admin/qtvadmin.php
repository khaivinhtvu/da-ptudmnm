<?php include "../admin/headeradmin.php"; if (!isset($_SESSION["qtri"])) {
    echo "<script language=javascript>
alert('Bạn không có quyền trên trang này!'); window.location='../index.php';
</script>";
}   ?>
<div class="container my-4">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <h1 class="text-center text-primary">Danh Sách Quản Trị Viên</h1>

    <a href="../admin/themqtvadmin.php">
        <button class="btn btn-primary mb-3">Thêm Quản Trị Viên</button>
    </a>

    <div class="my-4">
        <table class="table table-bordered table-hover" id="sanphamTable">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên Đăng Nhập</th>
                    <th>Họ Tên</th>
                    <th>Địa Chỉ</th>
                    <th>Số Điện Thoại</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
<script>
$(document).ready(function() {
    function loadQTV() {
        $.get("http://localhost/webbandongho/api/qtvapi.php", function(data) {
            $('#sanphamTable tbody').empty();
            data.forEach(function(qtv) {
                var row = "<tr data-id='" + qtv.id + "'>" +
                    "<td> " + qtv.id + " </td>" +
                    "<td> " + qtv.tendnqtv + " </td>" +
                    "<td> " + qtv.tenqtv + " </td>" +
                    "<td> " + qtv.diachiqtv + " </td>" +
                    "<td> " + qtv.dtqtv + " </td>" +
                    "<td><form action='../admin/suaqtvadmin.php' method='post' class='d-inline'><input type='hidden' name='qtvId' value='" +
                    qtv.id +
                    "'><button name='editBtn' class='btn btn-warning btn-sm'>Chỉnh Sửa</button></form> <button class='deleteBtn btn btn-danger btn-sm'>Xoá</button></td>" +
                    "</tr>";
                $('#sanphamTable tbody').append(row);
            });
        });
    }

    loadQTV();

    $(document).on('click', '.deleteBtn', function() {
        var row = $(this).closest('tr');
        var masp = row.data('id');
        $.ajax({
            url: "http://localhost/webbandongho/api/qtvapi.php",
            type: "DELETE",
            contentType: "application/json",
            data: JSON.stringify({
                id: id
            }),
            success: function() {
                loadQTV();
            }
        });
    });
});
</script>

<?php include "../admin/infoadmin.php" ?>
<?php include "../admin/footeradmin.php" ?>