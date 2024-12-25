<?php
include '../ketnoi/ketnoi.php';

header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];
$string = file_get_contents('php://input');
$input = json_decode($string, true);

switch ($method) {
    case 'GET':
        $result = $kn->query("SELECT * FROM sanpham");
        $sanpham = [];
        while ($row = $result->fetch_assoc()) {
            $sanpham[] = $row;
        }
        echo json_encode($sanpham);
        break;

    case 'POST':
        $masp = $input['masp'];
        $tensp = $input['tensp'];
        $hinh = $input['hinh'];
        $gia = $input['gia'];
        $mota = $input['mota'];
        $gia_km = $input['gia_km'];
        $soluong = $input['soluong'];
        $kn->query("INSERT INTO sanpham (masp, tensp, hinh, gia, mota, gia_km, soluong) VALUES ('$masp', '$tensp','$hinh', $gia, '$mota', $gia_km, $soluong)");
        echo json_encode(["message" => "san pham da duoc them vao"]);
        break;

    case 'PUT':
        $masp = $input['masp'];
        $tensp = $input['tensp'];
        $hinh = $input['hinh'];
        $gia = $input['gia'];
        $mota = $input['mota'];
        $gia_km = $input['gia_km'];
        $soluong = $input['soluong'];
        $kn->query("UPDATE sanpham SET tensp='$tensp', hinh='$hinh', gia=$gia, mota='$mota', gia_km=$gia_km, soluong=$soluong WHERE masp='$masp'");
        echo json_encode(["message" => "san pham da duoc cap nhat"]);
        break;

    case 'DELETE':
        $masp = $input['masp'];
        $kn->query("DELETE FROM sanpham WHERE masp=$masp");
        echo json_encode(["message" => "san pham da duoc xoa"]);
        break;

    default:
        echo json_encode(["message" => "Invalid request method"]);
        break;
}

$kn->close();

?>