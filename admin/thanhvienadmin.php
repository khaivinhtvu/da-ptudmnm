<?php include "../admin/headeradmin.php"; if (!isset($_SESSION["qtri"])) {
    echo "<script language=javascript>
alert('Bạn không có quyền trên trang này!'); window.location='../index.php';
</script>";
}?>
<div class="container my-4">
    <h1 class="text-center text-primary">Danh Sách Thành Viên</h1>

    <div class="my-4">
        <table class="table table-bordered table-hover" id="sanphamTable">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Mã Thành Viên </th>
                    <th scope="col"> Tên Đăng Nhập </th>
                    <th scope="col"> Họ Tên </th>
                    <th scope="col"> Email </th>
                    <th scope="col"> Địa Chỉ </th>
                    <th scope="col"> Số điện thoại </th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
<script>
$(document).ready(function() {
    function loadQTV() {
        $.get("http://localhost/webbandongho/api/thanhvienapi.php", function(data) {
            $('#sanphamTable tbody').empty();
            data.forEach(function(tv) {
                var row = "<tr data-id='" + tv.MaTV + "'>" +
                    "<td> " + tv.MaTV + " </td>" +
                    "<td> " + tv.Tendangnhap + " </td>" +
                    "<td> " + tv.Hoten + " </td>" +
                    "<td> " + tv.Email + " </td>" +
                    "<td> " + tv.Diachi + " </td>" +
                    "<td> " + tv.Sdt + " </td>" +
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