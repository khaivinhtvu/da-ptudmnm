<?php
include '../ketnoi/ketnoi.php';

header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];
$string = file_get_contents('php://input');
$input = json_decode($string, true);

switch ($method) {
    case 'GET':
        $result = $kn->query("SELECT * FROM hoadon");
        $sanpham = [];
        while ($row = $result->fetch_assoc()) {
            $sanpham[] = $row;
        }
        echo json_encode($sanpham);
        break;

    case 'POST':
        $mahoadon = $input['mahoadon'];
        $ngaylap= $input['ngaylap'];
        $tongtien = $input['tongtien'];
        $soluong = $input['soluong'];
        $hinhthucthanhtoan = $input['hinhthucthanhtoan'];
        $kn->query("INSERT INTO hoadon (mahoadon, ngaylap, tongtien, soluong) VALUES ('$mahoadon', '$ngaylap','$tongtien','$soluong','$hinhthucthanhtoan')");
        echo json_encode(["message" => "hoa don da duoc them vao"]);
        break;

    case 'PUT':
        $mahoadon = $input['mahoadon'];
        $ngaylap= $input['ngaylap'];
        $tongtien = $input['tongtien'];
        $soluong = $input['soluong'];
        $kn->query("UPDATE hoadon SET mahoadon='$mahoadon', ngaylap='$ngaylap', tongtien='$tongtien', soluong='$soluong' WHERE mahoadon='$mahoadon'");
        echo json_encode(["message" => "hoa don da duoc cap nhat"]);
        break;

    case 'DELETE':
        $mahoadon = $input['mahoadon'];
        $kn->query("DELETE FROM hoadon WHERE mahoadon='$mahoadon'");
        echo json_encode(["message" => "hoa don da duoc xoa"]);
        break;

    default:
        echo json_encode(["message" => "Invalid request method"]);
        break;
}

$kn->close();

?>