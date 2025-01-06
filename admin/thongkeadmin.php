<?php include("../admin/headeradmin.php");
if (!isset($_SESSION["qtri"])) {
	echo ("<script language=javascript>
            alert('Bạn không có quyền trên trang này!'); 
            window.location='../index.php';
            </script>");
} ?>

<?php
$dataPoints = array(
	array("x" => 10, "y" => 41),
	array("x" => 20, "y" => 35, "indexLabel" => "Lowest"),
	array("x" => 30, "y" => 50),
	array("x" => 40, "y" => 45),
	array("x" => 50, "y" => 52),
	array("x" => 60, "y" => 68),
	array("x" => 70, "y" => 38),
	array("x" => 80, "y" => 71, "indexLabel" => "Highest"),
);

?>
<div class="container mt-4">
	<div id="chartContainer" style="height: 370px; width: 100%;"></div>
	<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</div>

<script>
	window.onload = function() {

		var chart = new CanvasJS.Chart("chartContainer", {
			animationEnabled: true,
			exportEnabled: true,
			theme: "light1", // "light1", "light2", "dark1", "dark2"
			axisY: {
				includeZero: true
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