<?php include "views/header.php"; if (!isset($_SESSION["user"])) {
    echo "<script language=javascript>
alert('Bạn không có quyền trên trang này!'); window.location='index.php';
</script>";
}?>

<section class="furniture_section layout_padding">
    <div class="container bg-info detail-box">
        <div class="heading_container">
            <h2 class="text-center fw-bold fs-3 my-3 mb-2 text-dark">
                Thông tin tài khoản
            </h2>
        </div>
        <div class="row">
            <?php
        if (isset($_SESSION["user"])) {
            include "ketnoi/ketnoi.php";
            $tdn = $_SESSION["user"];
            $sql = "select * from thanhvien where Tendangnhap = '" . $tdn . "'";
            $kq = mysqli_query($kn, $sql);

            if (mysqli_num_rows($kq) == 1) {
                $row = mysqli_fetch_array($kq);
                echo ("<div class='col-md-6 col-lg-4'>
        <div class='box'>
        <div class='detail-box'>
        <h2 class='text-center fw-bold fs-3 my-3 mb-2 text-dark'>Mã thành viên</h2>
        <input type='text' id='Matv' readonly value='" . $row["MaTV"] . "'>
        <h2 class='text-center fw-bold fs-3 my-3 mb-2 text-dark'>Tên đăng nhập</h2>
        <input type='text' id='Tendangnhap' readonly value='" . $row["Tendangnhap"] . "' required>
        <h2 class='text-center fw-bold fs-3 my-3 mb-2 text-dark'>Họ và tên</h2>
        <input type='text' id='Hoten' readonly value='" . $row["Hoten"] . "' required>
        <h2 class='text-center fw-bold fs-3 my-3 mb-2 text-dark'>Email</h2>
        <input type='text' id='Email' readonly value='" . $row["Email"] . "' required>
        <h2 class='text-center fw-bold fs-3 my-3 mb-2 text-dark'>Địa chỉ</h2>
        <input type='text' id='Diachi' readonly value='" . $row["Diachi"] . "' required>
        <h2 class='text-center fw-bold fs-3 my-3 mb-2 text-dark'>Số điện thoại</h2>
        <input type='text' id='Sdt' readonly value='" . $row["Sdt"] . "' required>
        <h2 id='MK' hidden class='text-center fw-bold fs-3 my-3 mb-2 text-dark'>Mật khẩu</h2>
        <input type='text' id='Matkhau' readonly hidden value='' required>
        <h2 class='text-center fw-bold fs-3 my-3 mb-2 text-dark'></h2>
        <button id='btnEdit' onclick='editBeginFunction()' class='btn btn-primary text-white'>Chỉnh sửa tài khoản</button>
        <button id='btnEditxacnhan' onclick='editFunction()' hidden class='btn btn-primary text-white'>Xác nhận chỉnh sửa tài khoản</button>
        </div>
        </div>
        </div>");
            }
        }
        ?>
        </div>
    </div>
</section>

<script>
function editBeginFunction() {
    document.getElementById("Tendangnhap").readOnly = false;
    document.getElementById("Matkhau").readOnly = false;
    document.getElementById("Hoten").readOnly = false;
    document.getElementById("Email").readOnly = false;
    document.getElementById("Diachi").readOnly = false;
    document.getElementById("Sdt").readOnly = false;
    document.getElementById("btnEditxacnhan").hidden = false;
    document.getElementById("MK").hidden = false;
    document.getElementById("Matkhau").hidden = false;
    document.getElementById("btnEdit").hidden = true;
}

function editFunction() {
    var matv = $('#Matv').val();
    var tendn = $('#Tendangnhap').val();
    var matkhau = $('#Matkhau').val();
    var hoten = $('#Hoten').val();
    var email = $('#Email').val();
    var diachi = $('#Diachi').val();
    var sdt = $('#Sdt').val();

    $.ajax({
        url: "http://localhost/webbandongho/api/thanhvienapi.php",
        type: "PUT",
        contentType: "application/json",
        data: JSON.stringify({
            matv: matv,
            tendangnhap: tendn,
            matkhau: matkhau,
            hoten: hoten,
            email: email,
            diachi: diachi,
            sdt: sdt
        }),
        success: function() {
            alert("Tài khoản đã được cập nhập");
            document.getElementById("Tendangnhap").readOnly = true;
            document.getElementById("Matkhau").readOnly = true;
            document.getElementById("Hoten").readOnly = true;
            document.getElementById("Email").readOnly = true;
            document.getElementById("Diachi").readOnly = true;
            document.getElementById("Sdt").readOnly = true;
            document.getElementById("btnEditxacnhan").hidden = true;
            document.getElementById("MK").hidden = true;
            document.getElementById("Matkhau").hidden = true;
            document.getElementById("btnEdit").hidden = false;
        }
    });
}
</script>

<?php include "views/info.php" ?>

<?php include "views/footer.php" ?>