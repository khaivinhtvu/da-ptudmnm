<?php
include '../ketnoi/ketnoi.php';

header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];
$string = file_get_contents('php://input');
$input = json_decode($string, true);

switch ($method) {
    case 'GET':
        $result = $kn->query("SELECT * FROM quantrivien");
        $sanpham = [];
        while ($row = $result->fetch_assoc()) {
            $sanpham[] = $row;
        }
        echo json_encode($sanpham);
        break;

    case 'POST':
        $id = $input['id'];
        $tendnqtv = $input['tendnqtv'];
        $tenqtv = $input['tenqtv'];
        $matkhauqtv = md5($input['matkhauqtv']);
        $diachiqtrv = $input['diachiqtv'];
        $dtqtv = $input['dtqtv'];
        $kn->query("INSERT INTO quantrivien (id, tendnqtv, tenqtv, matkhauqtv, diachiqtv, dtqtv) VALUES ('$id', '$tendnqtv', '$tenqtv', '$matkhauqtv', '$diachiqtrv', '$dtqtv')");
        echo json_encode(["message" => "quan tri vien moi da duoc them vao"]);
        break;

    case 'PUT':
        $id = $input['id'];
        $tendnqtv = $input['tendnqtv'];
        $tenqtv = $input['tenqtv'];
        $matkhauqtv = md5($input['matkhauqtv']);
        $diachiqtrv = $input['diachiqtv'];
        $dtqtv = $input['dtqtv'];
        $kn->query("UPDATE quantrivien SET tendnqtv='$tendnqtv', tenqtv = '$tenqtv', matkhauqtv='$matkhauqtv', diachiqtv='$diachiqtv', dtqtv='$dtqtv' WHERE id='$id'");
        echo json_encode(["message" => "quan tri vien da duoc cap nhat"]);
        break;

    case 'DELETE':
        $id = $input['id'];
        $kn->query("DELETE FROM quantrivien WHERE id=$id");
        echo json_encode(["message" => "quan tri vien da duoc xoa"]);
        break;

    default:
        echo json_encode(["message" => "Invalid request method"]);
        break;
}

$kn->close();

?>