<?php include "../admin/headeradmin.php"; if (!isset($_SESSION["qtri"])) {
    echo "<script language=javascript>
alert('Bạn không có quyền trên trang này!'); window.location='../index.php';
</script>";
}   ?>
<div class="container my-4">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <h1 class="text-center text-primary">Danh sách quản trị viên</h1>

    <div class="my-4">
        <table class="table table-bordered table-hover" id="sanphamTable">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên Đăng Nhập</th>
                    <th>Họ Tên</th>
                    <th>Địa Chỉ</th>
                    <th>Số Điện Thoại</th>
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
                    "</tr>";
                $('#sanphamTable tbody').append(row);
            });
        });
    }

    loadQTV();
});
</script>

<?php include "../admin/infoadmin.php" ?>
<?php include "../admin/footeradmin.php" ?>