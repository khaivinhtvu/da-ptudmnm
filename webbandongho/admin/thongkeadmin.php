<?php include("../admin/headeradmin.php");
if (!isset($_SESSION["qtri"])) {
    echo ("<script language=javascript>
            alert('Bạn không có quyền trên trang này!'); 
            window.location='../index.php';
            </script>");
} ?>

<?php
if (isset($_POST["thongke"])) {
    include("../ketnoi/ketnoi.php");
    $xacnhan = $_POST["thang"];
    $time = explode("-", $xacnhan);
    $sql1 = "SELECT * FROM hoadon WHERE MONTH(ngaylap) = '" . $time[1] . "' AND YEAR(ngaylap) = '" . $time[0] . "'";
    $kq1 = mysqli_query($kn, $sql1);
    $dataPoints = [];
    $tong = 0;
    $ngay = 0;
    $numrow = mysqli_num_rows($kq1);
    while ($row1 = mysqli_fetch_array($kq1)) {
        $sql2 = "SELECT CAST(DATE_FORMAT(ngaylap, '%d') as UNSIGNED) FROM hoadon WHERE mahoadon = '" . $row1['mahoadon'] . "'";
        $kq2 = mysqli_query($kn, $sql2);
        $row2 = mysqli_fetch_array($kq2);

        if ($ngay == 0) {
            $ngay = $row2[0];
            $tong = $row1["tongtien"];
            $numrow = $numrow - 1;
        } else if ($ngay == $row2[0]) {
            $tong = $tong + $row1["tongtien"];
            $numrow = $numrow - 1;
            if ($numrow == 0) {
                $data = array("x" => $ngay, "y" => $tong);
                $dataPoints[] = $data;
                $ngay = 0;
                $tong = 0;
            }
        } else if ($ngay != $row2[0]) {
            $data = array("x" => $ngay, "y" => $tong);
            $dataPoints[] = $data;
            $ngay = $row2[0];
            $tong = $row1["tongtien"];
            $numrow = $numrow - 1;
            if ($numrow == 0) {
                $data = array("x" => $ngay, "y" => $tong);
                $dataPoints[] = $data;
                $ngay = 0;
                $tong = 0;
            }
        }
    };
} else {
    $dataPoints = [];
}
?>
<div class="container mt-4">

    <div class='invoice-header text-center'>
        <h1 class="mb-4 text-center text-primary">Thống Kê Doanh Thu</h1>
    </div>
    <form action="../admin/thongkeadmin.php" method="POST">
        <div class="box">
            <h5>
                Chọn tháng thống kê
            </h5>
            <input id="thang" name="thang" type="month">
            <button id="thongke" name="thongke" class="btn btn-primary text-white" type="submit">Thống kê</button>
        </div>
    </form>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</div>

<?php
if (isset($_POST["thongke"])) {
    include("../ketnoi/ketnoi.php");
    $xacnhan = $_POST["thang"];
    $time = explode("-", $xacnhan);
    $sql1 = "SELECT * FROM hoadon WHERE MONTH(ngaylap) = '" . $time[1] . "' AND YEAR(ngaylap) = '" . $time[0] . "'";
    $kq1 = mysqli_query($kn, $sql1);
    $tong = 0;
    while ($row1 = mysqli_fetch_array($kq1)) {
        $tong = $tong + $row1["tongtien"];
    };
    echo("<div class='container mt-4'>
        <h5>
        Tổng doanh thu trong tháng: ".$tong." VND
        </h5>
        </div>");
}
?>

<script>
    window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            exportEnabled: true,
            theme: "light1", // "light1", "light2", "dark1", "dark2"
            axisY: {
                includeZero: true,
                title: "Doanh thu",
                titleFontSize: 24,
                suffix: " VNĐ"
            },
            axisX: {
                includeZero: true,
                titleFontSize: 24,
                ticks: {
                    stepSize: 1,
                    beginAtZero: true,
                }
            },
            data: [{
                type: "line", //change type to bar, line, area, pie, etc
                //indexLabel: "{y}", //Shows y value on all Data Points
                indexLabelFontColor: "#5A5757",
                indexLabelPlacement: "outside",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();
    }
</script>

<?php include "../admin/infoadmin.php" ?>
<?php include "../admin/footeradmin.php" ?>